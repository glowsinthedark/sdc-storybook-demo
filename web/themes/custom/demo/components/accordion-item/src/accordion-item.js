((Drupal, once) => {
  Drupal.behaviors.accordion = {
    attach(context, _settings) {
      // Accordion Expand/Collapse functionality
      once("accordionButtons", ".c-accordion-item__button", context).forEach(
        (accordionButton) => {
          accordionButton.addEventListener("click", () => {
            const accordionContent = document.getElementById(
              accordionButton.getAttribute("aria-controls")
            );
            const isExpanded =
              accordionButton.getAttribute("aria-expanded") === "true";
            accordionButton.setAttribute("aria-expanded", !isExpanded);
            accordionContent.setAttribute("aria-hidden", isExpanded);
            accordionButton.querySelector(
              ".c-accordion-item__button-text"
            ).textContent = !isExpanded ? "Collapse" : "Expand";
          });
        }
      );

      // Add the appropriate aria-label to each accordion button
      once("accordionItems", ".c-accordion-item", context).forEach(
        (accordionItem) => {
          const accordionTitle = accordionItem.querySelector(
            ".c-accordion-item__title"
          );
          const accordionButton = accordionItem.querySelector(
            ".c-accordion-item__button"
          );
          const accordionTitleText = accordionTitle.textContent.trim();
          accordionButton.setAttribute(
            "aria-label",
            `toggle ${accordionTitleText}`
          );
        }
      );
    },
  };
})(Drupal, once);
