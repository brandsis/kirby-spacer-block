# Kirby spacer block

This plugin allows you to add a spacer block via the Kirby Panel, when you need to add additional space in your front-end pages.

## Installation

Download, extract and copy this repository to `/site/plugins/spacer-block`.

## Usage

Once you've installed the plugin, simply add `- spacer` to your `fieldsets` options in the relevant blueprints. For example...

```
    fieldname:
      type: blocks
      fieldsets:
        - text
        - image
        - gallery
        - markdown
        - spacer
```

You can also make the spacer block universally available by adding it to a default list of blocks via your `/site/config/config.php` file...

```
    <?php

    return [
      'blocks' => [
        'fieldsets' => [
          'text',
          'image',
          'gallery',
          'markdown',
          'spacer'
        ]
      ]
    ];
```

The spacer block is non-editable in the Panel. It adds a `<div class="spacer"></div>` element in the front-end. You can then style the `.spacer` class as required in your main CSS file.

## Disclaimer

This plugin is provided "as is" and with no guarantee. You use it at your own risk. Always test it before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/brandsis/kirby-spacer-block/issues/new).

## License

[MIT](https://choosealicense.com/licenses/mit/)
