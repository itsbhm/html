# ✅ Chapter 8: Media Elements in HTML

---

## 🎥 Adding Videos: `<video>`

The `<video>` tag allows you to embed video files in your webpage.

### Basic Syntax:

```html
<video src="video.mp4" controls></video>
```

### Common Attributes:

| Attribute  | Description                          |
| ---------- | ------------------------------------ |
| `src`      | Path to video file (MP4, WebM)       |
| `controls` | Adds play, pause, volume buttons     |
| `autoplay` | Starts playing as soon as page loads |
| `loop`     | Repeats video automatically          |
| `muted`    | Starts the video with no sound       |
| `poster`   | Shows an image before video plays    |

### Example:

```html
<video src="media/trailer.mp4" width="500" controls poster="poster.jpg">
  Your browser does not support the video tag.
</video>
```

---

## 🔊 Adding Audio: `<audio>`

The `<audio>` tag is used to play sound/music.

### Basic Syntax:

```html
<audio src="song.mp3" controls></audio>
```

### Example:

```html
<audio controls>
  <source src="audio/song.mp3" type="audio/mpeg" />
  Your browser does not support the audio element.
</audio>
```

### Supported Audio Formats:

* `.mp3` (Most common)
* `.ogg`
* `.wav`

---

## 🔗 Embedding External Content: `<iframe>`

Use `<iframe>` to display content from another website (like YouTube, Google Maps, etc.)

### Example: Embed YouTube Video

```html
<iframe width="560" height="315"
  src="https://www.youtube.com/embed/dQw4w9WgXcQ"
  title="YouTube video player"
  frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen>
</iframe>
```

### Other Uses of `<iframe>`:

* Embedding Google Maps
* Embedding a form
* Displaying another webpage inside your page

---

## ⚠️ Tips for Using Media

* Always use `controls` so users can interact.
* Add `alt` text for fallback when using iframe (e.g., message inside `<iframe>...</iframe>`)
* Use compressed files for faster loading.
* Store media in a dedicated `media/` folder (e.g., `media/song.mp3`)

---

## 💡 Hands-On Task: Embed Video, Audio, and YouTube

### Create a file `media.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>Media Page</title>
</head>
<body>

  <h1>My Media Collection</h1>

  <h2>🎬 Local Video</h2>
  <video src="media/demo.mp4" width="400" controls poster="media/poster.jpg">
    Your browser does not support video.
  </video>

  <h2>🎵 Audio Clip</h2>
  <audio controls>
    <source src="media/sample.mp3" type="audio/mpeg" />
    Your browser does not support audio.
  </audio>

  <h2>▶️ YouTube Embed</h2>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO-ID"
    title="YouTube player" frameborder="0"
    allowfullscreen></iframe>

</body>
</html>
```

🧪 Try playing each media file and observe controls and poster image.

---

## ✅ Summary

* Use `<video>` to embed local video files
* Use `<audio>` for playing sound or music
* `<iframe>` embeds external content like YouTube
* Use `controls`, `autoplay`, `loop`, and `poster` for user-friendly media
* Store media in organized folders and compress files for speed

---

## 🧪 Exercise

1. Create `audiovideo.html`
2. Add:

   * A video of your choice with controls and poster
   * A sample audio file with player controls
   * An embedded YouTube video using iframe
