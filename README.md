# Instagram Feed for Statamic ![Statamic 2](https://img.shields.io/badge/statamic-2-blue.svg?style=flat-square)

📸 **Easily embed photos from a public instagram feed** 📸

This addon adds a fieldtype which gets images from public instagram profiles.

For example:
```
{{ instagram_feed limit="3" }}
    <img src="{{ image }}">
{{ /instagram_feed }}
```

## Installation

1. Copy the `addons/InstagramFeed` directory to your project's `site/addons` folder. 
2. Run `php please update:addons`
3. Enter your Instagram username in the control panel, or by creating a file at `site/settings/addons/instagram_feed.yaml` with the following:
```
username: 'your-instagram-username'
```

Note that your profile **must be public** for this to work. 

## Usage
After configuring your Instagram username, simply use the `{{ instagram_feed }}` 
tag like so:
```
{{ instagram_feed }}
    <img src="{{ image }}">
{{ /instagram_feed }}
```
> You may also use the `limit` parameter to restrict the number of recent posts

## Post Fields
Each post in the feed contains a number of fields for you to use.
| Field | Description |
| ----- | ----------- |
| `id` | The post's Instagram ID |
| `image` | The URL of the image |
| `caption` | The caption of the post |
| `thumb` | The URL for the post's thumbnail |
| `date` | The date it was posted |
| `comments` | The total number of comments on the post |
| `likes` | The total number of likes on the post |
| `height` | The image's height |
| `width` | The image's width |


## Available Parameters
Currently only one option is supported, `limit`
| Option  | Default Value | Description |
| ------------- | ------------- | --- | 
| `limit`  | `12` | The number of recent posts to pull |


## Requirements

This addon requires Statamic 2 and should work with any variant of it.

## Support

Have a feature request or a problem with the addon? I'd be happy to help!
Just send an email to `info@406.io` with the subject `Statamic Instagram Help` and I will get back to you as soon as I can. :)