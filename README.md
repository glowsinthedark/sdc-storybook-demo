# Overview
This is a development sandbox used to test integration of Storybook.js and Drupal's Single Directory Components with the Prototype theme. It is not meant for production. The site uses ddev.

# Installation
1. `ddev start`
2. `ddev composerr install`
3. `ddev npm install`
4. `ddev drush site:install --account-name=admin --account-pass=admin -y`
5. `ddev drush en sdc twig_field_value twig_tweak cl_server admin_toolbar -y`
6. `ddev theme:install`
7. `ddev drush uli`
8. Go to `/admin/appearance` and enable and set as default the Demo theme
9. Go to `/admin/people/permissions` and allow anonymous users to "Use the CL Server endpoint"
10. `ddev storybook:start`

- Project can be reached at: https://demo.ddev.site
- Storybook can be reached at: https://demo.ddev.site:6006

# Additional DDEV Commands

- `ddev storybook:setup` - runs `npm install` at root
- `ddev storybook:start` - runs `npm run storybook` at root
- `ddev theme:install` - runs `npm install` in theme directory
- `ddev theme:build` - runs `npm run build` in theme directory
- `ddev them:watch` - runs `npm run watch` in theme directory
