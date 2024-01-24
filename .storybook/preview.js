/** @type { import('@storybook/server').Preview } */
const preview = {
  globals: {
    drupalTheme: 'demo',
    supportedDrupalThemes: {
      demo: {title: 'Demo'},
      claro: {title: 'Claro'},
    },
  },
  parameters: {
    server: {
      // Replace this with your Drupal site URL, or an environment variable.
      url: 'https://demo.ddev.site',
    },
    actions: { argTypesRegex: "^on[A-Z].*" },
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /Date$/i,
      },
    },
  },
};

export default preview;
