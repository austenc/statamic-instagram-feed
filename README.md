# THIS PACKAGE IS NOW UNMAINTAINED

Sorry folks, but this package is painful to maintain, because it's not an official way of connecting to Instagram. Since Instagram is constantly trying to discourage web scraping, it means fixes are often needed to respond to those changes. As of today (04/13/2022), this repository will be marked as deprecated. 

A more "official" alternative is [https://statamic.com/addons/lbeauvisage/instagram-user-feed-using-API](https://statamic.com/addons/lbeauvisage/instagram-user-feed-using-API).

If you insist on continuing down the rocky road of Instagram web scraping, see the following package (which always did the heavy lifting of this one, anyway):
[https://github.com/pgrimaud/instagram-user-feed](https://github.com/pgrimaud/instagram-user-feed)

_Feel free to [reach out on Twitter](https://twitter.com/austencam) if you want to take ownership of this repo._


# Statamic Instagram Feed ![Statamic 3](https://img.shields.io/badge/statamic-3-blue.svg?style=flat-square)

📸 **Easily embed an instagram feed in your Statamic site** 📸

### This version of the addon is only for Statamic 3+

_This addon adds a fieldtype which gets images from instagram profiles. It uses web scraping under the hood, so beware, if Instagram changes something it may have issues! Generally, it's pretty stable._

**For example:**

```
{{ instagram_feed limit="3" }}
    <img src="{{ image }}">
{{ /instagram_feed }}
```

## Requirements

- Statamic 3
- Instagram credentials for an account with Multi-factor auth turned OFF

## Installation

Require the package with composer:

```
composer require austenc/statamic-instagram-feed
```

## Configuration

> It is recommended to create a **dummy instagram account** without Two Factor Authentication to use with this addon.

For more information, check out the [underlying composer package](https://github.com/pgrimaud/instagram-user-feed).

You need to configure an Instagram username and password. Optionally, you can
include a different profile for the feed to display.

Set the username/password `.env` file

```sh
INSTAGRAM_USERNAME='your-username'
INSTAGRAM_PASSWORD='your-password'
INSTAGRAM_PROFILE='profile-you-want-to-view'
```

> The username and password do not have to match the profile displayed, as long as the account can view the profile.

## Usage

After configuring your Instagram username and password, use the `{{ instagram_feed }}` tag:

```
{{ instagram_feed }}
    <img src="{{ image }}">
{{ /instagram_feed }}
```

> You may also use the `limit` parameter to restrict the number of recent posts

## Post Fields

Each post in the feed contains a number of fields for you to use.

| Field      | Description                              |
| ---------- | ---------------------------------------- |
| `id`       | The post's Instagram ID                  |
| `image`    | The URL of the image                     |
| `caption`  | The caption of the post                  |
| `thumb`    | The URL for the post's thumbnail         |
| `date`     | The date it was posted                   |
| `comments` | The total number of comments on the post |
| `likes`    | The total number of likes on the post    |
| `link`     | The full URL to the post                 |
| `height`   | The image's height                       |
| `width`    | The image's width                        |

## Available Parameters

| Option    | Default Value | Description                        |
| --------- | ------------- | ---------------------------------- |
| `limit`   | `12`          | The number of recent posts to pull |
| `profile` | `null`        | The Instagram profile to display   |

## Support

Find a bug? Have a feature request? I'd be happy to help! Open an issue [on github](https://github.com/austenc/statamic-instagram-feed)
or reach out on twitter [@austencam](https://twitter.com/austencam) and I will get back to you when I can.
