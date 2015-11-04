# chromecast-web-viewer

This project allows you to easily set up a web page to show web videos.
[Google Chromecast](https://www.google.com/chromecast) support is implemented: if Chromecast is supported, the user has got the ability to cast the video on his device.
Otherwise (i.e. for browsers different from Google Chrome), a simple video is shown.

This project represents an extension (actually, it's a simplification) of the [CastVideos-chrome](https://github.com/googlecast/CastVideos-chrome) project.
For further details, please refer to the original project.

### Usage ###

The idea behind this project is to forward your videos to this page, passing video information as `GET` parameters:

```
index.php?u=$URL&t=$TITLE&i=$IMAGE
```

where `$URL` identifies the URL address of the video, `$TITLE` identifies its title, and `$IMAGE` identifies the thumbnail image to display.

All these parameters should be encoded, as reported in the following examples:
 * PHP: `urlencode($URL)`
 * JavaScript: `encodeURIComponent(URL)`

### Notes ###

Note that no `$URL` check is accomplished by default, so anyone is potentially able to use your page for his purposes.
If you want to avoid this, you should check `$URL` on `index.php`.

### Contacts ###

You can find me on Twitter as [@auino](https://twitter.com/auino).
