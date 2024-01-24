(function ($, Drupal) {
  Drupal.behaviors.menuControl = {
    attach: function (context) {
      once('menuControl', '.c-menu', context).forEach(function (menu) {
        /**
         * Accessible Menu
         * This file is based on content that is licensed according to the W3C Software License at
         * https://www.w3.org/Consortium/Legal/2015/copyright-software-and-document
         *
         * - 01 - MenuLink Class (Base)
         * - 02 - MenuButton Class (Extends MenuLink)
         * - 03 - Constants
         * - 04 - Initalize Menus
         * - 05 - Drupal Aira Controls
         */

        /*------------------------------------*\
          - 01 - MenuLink Class (Base)
          This is the base class for attaching functions to menu links
        \*------------------------------------*/
        class MenuLinks {
          constructor(domNode) {
            this.domNode = domNode;
            this.menuitemNodes = [];
            this.firstMenuitem = false;
            this.lastMenuitem = false;

            let nodes = domNode.querySelectorAll('.menu__link');

            for (let i = 0; i < nodes.length; i++) {
              let menuitem = nodes[i];

              this.menuitemNodes.push(menuitem);

              menuitem.addEventListener(
                'keydown',
                this.onMenuitemKeydown.bind(this)
              );

              if (!this.firstMenuitem) {
                this.firstMenuitem = menuitem;
              }
              this.lastMenuitem = menuitem;
            }
          }

          setFocusToMenuitem(newMenuitem) {
            this.menuitemNodes.forEach(function (item) {
              if (item === newMenuitem) {
                newMenuitem.focus();
              }
            });
          }

          setFocusToFirstMenuitem() {
            this.setFocusToMenuitem(this.firstMenuitem);
          }

          setFocusToLastMenuitem() {
            this.setFocusToMenuitem(this.lastMenuitem);
          }

          setFocusToPreviousMenuitem(currentMenuitem) {
            let newMenuitem, index;

            if (currentMenuitem === this.firstMenuitem) {
              newMenuitem = this.lastMenuitem;
            } else {
              index = this.menuitemNodes.indexOf(currentMenuitem);
              newMenuitem = this.menuitemNodes[index - 1];
            }

            this.setFocusToMenuitem(newMenuitem);

            return newMenuitem;
          }

          setFocusToNextMenuitem(currentMenuitem) {
            let newMenuitem, index;

            if (currentMenuitem === this.lastMenuitem) {
              newMenuitem = this.firstMenuitem;
            } else {
              index = this.menuitemNodes.indexOf(currentMenuitem);
              newMenuitem = this.menuitemNodes[index + 1];
            }
            this.setFocusToMenuitem(newMenuitem);

            return newMenuitem;
          }

          onMenuitemKeydown(event) {
            let target = event.currentTarget,
              key = event.key;

            if (event.ctrlKey || event.altKey || event.metaKey) {
              return;
            }

            switch (key) {
              case 'Left':
              case 'ArrowLeft':
                // Find the prevous element and set it as the focus
                let prev = $(target).parent().prev();
                if ($(prev).find('.menu__link').length > 0) {
                  //Move to previous element
                  $(prev).find('.menu__link').focus();
                } else {
                  //  Find relative parent to current
                  let targetParent = $(target).parent().parent()[0];
                  let prev = $(targetParent).find(
                    ' > .menu__item > .menu__link'
                  );

                  // Navigate to last list element
                  prev[prev.length - 1].focus();
                }
                break;

              case 'Right':
              case 'ArrowRight':
                // Find the next element and set it as the focus
                let next = $(target).parent().next();
                if ($(next).find('.menu__link').length > 0) {
                  //Move to next element
                  $(next).find('.menu__link').focus();
                } else {
                  //  Find relative parent to current
                  let targetParent = $(target).parent().parent()[0];
                  let next = $(targetParent).find(
                    ' > .menu__item > .menu__link'
                  );
                  // Wrap to first element in list
                  next[0].focus();
                }
                break;

              case 'Tab':
                // Did the user shift + tab?
                if (event.shiftKey) {
                  let first = $(target).parent().is(':first-child');
                  if (!first) {
                    // Allow event to pass
                  } else {
                    if (this.isOpen()) {
                      this.closePopup();
                    }
                  }
                }
                break;

              default:
                break;
            }
          }
        }

        /*------------------------------------*\
          - 02 - MenuButton Class (Extends MenuLink)
          This is the base class for attaching functions to menu buttons
        \*------------------------------------*/
        class MenuButtons extends MenuLinks {
          constructor(domNode) {
            //  Call parent constructor
            super(domNode);

            // Button specific properties
            this.buttonNode = domNode.querySelector('button');
            this.buttonNode.setAttribute('aria-expanded', 'false');

            let relativeMenu = domNode.querySelector('button + ul');
            let relativeMenuDepth = $(relativeMenu).attr('data-depth');
            let menuDepth = "ul.menu[data-depth='" + relativeMenuDepth + "']";
            this.menuNode = domNode.querySelector(menuDepth);
            this.menuNode
              .querySelectorAll('.menu__link:not(button)')
              .forEach((link) => {
                link.setAttribute('aria-hidden', 'true');
                link.setAttribute('tabindex', '-1');
              });

            // Attach button specific event listeners
            this.buttonNode.addEventListener(
              'keydown',
              this.onButtonKeydown.bind(this)
            );
            this.buttonNode.addEventListener(
              'click',
              this.onButtonClick.bind(this)
            );

            this.menuitemNodes = [];
            this.firstMenuitem = false;
            this.lastMenuitem = false;

            // Find all direct childen of the menu, excluding submenus
            let nodes = $(domNode)
              .find(menuDepth + ' > li.menu__item > *')
              .not('ul');

            for (let i = 0; i < nodes.length; i++) {
              let menuitem = nodes[i];
              this.menuitemNodes.push(menuitem);

              if (!this.firstMenuitem) {
                this.firstMenuitem = menuitem;
              }
              this.lastMenuitem = menuitem;
            }

            domNode.addEventListener('focusin', this.onFocusin.bind(this));
            domNode.addEventListener('focusout', this.onFocusout.bind(this));

            window.addEventListener(
              'mousedown',
              this.onBackgroundMousedown.bind(this),
              true
            );
          }

          // Popup menu methods
          openPopup() {
            this.menuNode.classList.add('open');
            this.menuNode
              .querySelectorAll('.menu__link:not(button)')
              .forEach((link) => {
                link.setAttribute('aria-hidden', 'true');
                link.setAttribute('tabindex', '0');
              });
            // Attach open to parent menu for styles
            const parentMenu = $(this.menuNode).first().parent()[0];
            parentMenu.classList.add('expanded');
            this.buttonNode.setAttribute('aria-expanded', 'true');
          }

          closePopup() {
            if (this.isOpen()) {
              this.buttonNode.setAttribute('aria-expanded', 'false');
              this.menuNode.classList.remove('open');
              this.menuNode
                .querySelectorAll('.menu__link:not(button)')
                .forEach((link) => {
                  link.setAttribute('aria-hidden', 'true');
                  link.setAttribute('tabindex', '-1');
                });
              // Attach open to parent menu for styles
              const parentMenu = $(this.menuNode).first().parent()[0];
              parentMenu.classList.remove('expanded');
            }
          }

          isOpen() {
            return this.buttonNode.getAttribute('aria-expanded') === 'true';
          }

          // Menu event handlers
          onFocusin() {
            this.domNode.classList.add('focus');
          }

          onFocusout() {
            this.domNode.classList.remove('focus');
          }

          onButtonKeydown(event) {
            let key = event.key,
              flag = false;
            switch (key) {
              case ' ':
              case 'Enter':
                if (this.isOpen()) {
                  this.closePopup();
                  this.buttonNode.focus();
                  flag = true;
                  break;
                } else {
                  this.openPopup();
                  flag = true;
                  break;
                }

              case 'Down':
              case 'ArrowDown':
                let parentMenu = $(this.buttonNode).parent().parent()[0];
                let isTopLevel = $(parentMenu).attr('data-depth') == 0;

                if (this.isOpen()) {
                  super.setFocusToFirstMenuitem();
                } else if (isTopLevel) {
                  this.openPopup();
                  flag = true;
                } else {
                  // Find next element and set it as the focus
                  let next = $(this.buttonNode).parent().next();
                  if ($(next).find('.menu__link').length > 0) {
                    //Move to next element
                    $(next).find('.menu__link').focus();
                  } else {
                    let next = $(
                      "ul[data-depth='0'] > .menu__item > .menu__link"
                    );
                    // Wrap to first element in list
                    next[0].focus();
                  }
                  flag = true;
                  break;
                }

                break;

              case 'Esc':
              case 'Escape':
                // If a button is open,close it
                if (this.isOpen()) {
                  this.closePopup();
                  this.buttonNode.focus();
                  flag = true;
                }
                break;

              case 'Up':
              case 'ArrowUp':
                if (this.isOpen()) {
                  super.setFocusToLastMenuitem();
                } else if (isTopLevel) {
                  this.openPopup();
                  flag = true;
                }
                break;

              case 'Left':
              case 'ArrowLeft':
                // Find prevous element and set it as the focus
                let prev = $(this.buttonNode).parent().prev();
                if ($(prev).find('.menu__link').length > 0) {
                  //Move to previous element
                  $(prev).find('.menu__link').focus();
                } else {
                  // We need to account for hidden menu items that could be in the list
                  let prev = $(
                    "ul[data-depth='0'] > .menu__item:not(:hidden) > .menu__link"
                  );
                  // Navigate to last list element
                  prev[prev.length - 1].focus();
                }
                break;

              case 'Right':
              case 'ArrowRight':
                // Find next element and set it as the focus
                let next = $(this.buttonNode).parent().next();
                if ($(next).find('.menu__link').length > 0) {
                  //Move to next element
                  $(next).find('.menu__link').focus();
                } else {
                  let next = $(
                    "ul[data-depth='0'] > .menu__item > .menu__link"
                  );
                  // Wrap to first element in list
                  next[0].focus();
                }
                break;

              default:
                break;
            }

            if (flag) {
              event.stopPropagation();
              event.preventDefault();
            }
          }

          onButtonClick(event) {
            if (this.isOpen()) {
              this.closePopup();
              this.buttonNode.focus();
            } else {
              this.openPopup();
            }

            event.stopPropagation();
            event.preventDefault();
          }

          onMenuitemKeydown(event) {
            let target = event.currentTarget,
              key = event.key,
              flag = false;

            if (event.ctrlKey || event.altKey || event.metaKey) {
              return;
            }

            switch (key) {
              case 'Esc':
              case 'Escape':
                if (this.isOpen) {
                  this.closePopup();
                  this.buttonNode.focus();
                  // flag = true;
                }
                break;

              case 'Up':
              case 'ArrowUp':
                super.setFocusToPreviousMenuitem(target);
                flag = true;
                break;

              case 'ArrowDown':
              case 'Down':
                super.setFocusToNextMenuitem(target);
                flag = true;
                break;

              case 'Left':
              case 'ArrowLeft':
                // Close menu if open
                if (this.isOpen()) {
                  this.closePopup();
                }

                // Find the top level button prevous element and set it as the focus
                let prev = $(target)
                  .closest(
                    "ul[data-depth='0'] > .menu__item.menu__item--expanded"
                  )
                  .prev();
                if ($(prev).find('.menu__link').length > 0) {
                  //Move to previous element
                  $(prev).find('.menu__link').focus();
                } else {
                  let prev = $(
                    "ul[data-depth='0'] > .menu__item > .menu__link"
                  );
                  // Navigate to last list element
                  prev[prev.length - 1].focus();
                }
                break;

              case 'Right':
              case 'ArrowRight':
                // Close menu if open
                if (this.isOpen()) {
                  this.closePopup();
                }
                // Find the top level button next element and set it as the focus
                let next = $(target)
                  .closest(
                    "ul[data-depth='0'] > .menu__item.menu__item--expanded"
                  )
                  .next();

                if ($(next).find('.menu__link').length > 0) {
                  //Move to next element
                  $(next).find('.menu__link').focus();
                } else {
                  let next = $(
                    "ul[data-depth='0'] > .menu__item > .menu__link"
                  );
                  // Wrap to first element in list
                  next[0].focus();
                }
                break;

              case 'Home':
              case 'PageUp':
                this.setFocusToFirstMenuitem();
                flag = true;
                break;

              case 'End':
              case 'PageDown':
                super.setFocusToLastMenuitem();
                flag = true;
                break;

              case 'Tab':
                // Did the user shift + tab?
                if (event.shiftKey) {
                  let first = $(target).parent().is(':first-child');
                  // Account for expanded menus with no toggle
                  let expanded = $(target)
                    .parent()
                    .parent()
                    .parent()
                    .hasClass('menu__item--expanded');
                  if (this.isOpen() && (!first || expanded)) {
                    // Allow event to pass
                  } else {
                    this.closePopup();
                  }
                  break;
                } else {
                  // Check if this is the last item in top level menu
                  let menuLast = $(target)
                    .closest("ul[data-depth='1']")
                    .find('> li:last-child');

                  // If the last menu item is a submenu, find the last item in the submenu
                  if (menuLast.hasClass('menu__item--expanded')) {
                    menuLast = menuLast.find('ul > li:last-child > a');
                  } else {
                    menuLast = menuLast.find('> a');
                  }

                  // Confirm if this is the last item in the menu
                  let last = $(target).is(menuLast);

                  if (this.isOpen() && !last) {
                    // If the event is open, or is not the last in the list allow event to pass
                  } else {
                    this.closePopup();
                  }
                }
                break;

              default:
                break;
            }

            if (flag) {
              event.stopPropagation();
              event.preventDefault();
            }
          }

          // If user clicks away, close menu
          onBackgroundMousedown(event) {
            if (!this.domNode.contains(event.target)) {
              if (this.isOpen()) {
                this.closePopup();
                this.buttonNode.focus();
              }
            }
          }
        }
        /*------------------------------------*\
          - 03 - Constants
        \*------------------------------------*/

        // Main Menu Items
        const menuItems = $(menu).find("ul[data-depth='0'] > li");

        /*------------------------------------*\
          - 04 - Initalize Menus
          What items should these functions be attached to
          @todo Rework menu section for better load times & clarity
        \*------------------------------------*/

        function initalizeMenus(menuItems) {
          // Initialize main menu list
          for (let i = 0; i < menuItems.length; i++) {
            // Attach different class based on button or link
            if (menuItems[i].querySelector('button')) {
              new MenuButtons(menuItems[i]);

              // Check for nexted level of menus
              const nextLevel = $(menuItems[i]).find('.menu__item--expanded');

              if (nextLevel.length > 0) {
                const nextLevelItems = $(menuItems[i]).find(
                  '.menu__item--expanded'
                );
                initalizeMenus(nextLevelItems);
              }
            } else {
              new MenuLinks(menuItems[i]);
            }
          }
        }

        // Configure main menu on load
        initalizeMenus(menuItems);
      });
    },
  };

  /*------------------------------------*\
    - 06 - Drupal Aira Controls
    Attach aria controls to menu items
  \*------------------------------------*/
  Drupal.behaviors.ariaControls = {
    attach: function (context) {
      once('ariaControls', '.c-menu', context).forEach(function (menu) {
        // Find top level menu buttons
        const buttons = $(menu).find(
          'ul[data-depth].menu > li button.menu__link'
        );

        // Add aria controls for buttons & related submenus
        // For each primary level for main menu, attach aria label
        buttons.each(function () {
          const id = $(this).attr('data-plugin-id');
          $(this)
            .attr('aria-haspopup', 'true')
            .attr('aria-controls', `panel-${id}`)
            .next()
            .attr('id', `panel-${id}`)
            .attr('aria-label', $(this).text());
        });
      });
    },
  };
})(jQuery, Drupal);
