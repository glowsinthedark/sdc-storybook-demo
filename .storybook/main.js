/** @type { import('@storybook/server-webpack5').StorybookConfig } */
const config = {
  stories: [
    "../web/themes/custom/demo/**/*.mdx",
    "../web/themes/custom/demo/**/*.stories.@(json|yml|mdx)",
  ],
  addons: [
    "@storybook/addon-links",
    "@storybook/addon-essentials",
    "@lullabot/storybook-drupal-addon",
  ],
  framework: {
    name: "@storybook/server-webpack5",
    options: {
      builder: {
        useSWC: true,
      },
    },
  },
  docs: {
    autodocs: "tag",
  },
};
export default config;
