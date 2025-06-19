# ✅ Chapter 5: Links and Images in HTML

---

## 🔗 Adding Links with the `<a>` Tag

The anchor tag `<a>` is used to create **hyperlinks**.

### Basic Syntax:

```html
<a href="URL">Clickable Text</a>
```

* `href`: URL (page address) the link will go to
* The text between `<a>` and `</a>` is what the user clicks

### Example:

```html
<a href="https://www.google.com">Visit Google</a>
```

This creates a clickable link:
👉 [Visit Google](https://www.google.com)

---

## 🪟 Opening Links in a New Tab: `target="_blank"`

To open the link in a **new tab**, use the `target` attribute:

```html
<a href="https://openfoxacademy.com" target="_blank">OpenFox Academy</a>
```

---

## 🖼️ Inserting Images with `<img>` Tag

The `<img>` tag is used to display images.

### Basic Syntax:

```html
<img src="image-path" alt="description" />
```

* `src`: Path or URL to the image
* `alt`: Alternate text if image doesn’t load (important for accessibility & SEO)
* `width`, `height`: Optional, in pixels

### Example:

```html
<img src="profile.jpg" alt="My Profile Picture" width="200" height="200" />
```

---

## 📁 Relative vs Absolute Paths

| Type         | Example                                 | Used When...                           |
| ------------ | --------------------------------------- | -------------------------------------- |
| **Relative** | `src="images/pic.jpg"`                  | Image is in a folder next to your HTML |
| **Absolute** | `src="https://example.com/img/pic.jpg"` | Image is from a website or CDN         |

---

## 🧠 Best Practices

* Always include `alt` text — it's shown when the image fails to load.
* Use **compressed** images for faster loading (e.g., `.jpg`, `.png`, `.webp`)
* Use **width** and **height** to prevent layout shift

---

## 🖼️+🔗 Combining Links and Images

You can also **make an image clickable**:

```html
<a href="https://example.com">
  <img src="banner.jpg" alt="Clickable Banner" />
</a>
```

---

## 💡 Hands-On Task: Create a Portfolio Section

### Step 1: Create a file `portfolio.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>My Portfolio</title>
</head>
<body>

  <h1>My Projects</h1>

  <p>
    <a href="project1.html">
      <img src="images/project1.png" alt="Project 1 Screenshot" width="300">
    </a>
  </p>

  <p>
    <a href="https://github.com/yourprofile" target="_blank">
      Visit My GitHub
    </a>
  </p>

</body>
</html>
```

### Step 2: Put an image in `images/` folder as `project1.png`

Or change the image path to one that exists.

---

## ✅ Summary

* `<a href="...">` creates a clickable link
* Use `target="_blank"` to open in a new tab
* `<img>` embeds images using `src`, with optional `alt`, `width`, `height`
* You can link images with `<a><img></a>`
* Use relative paths for local images, absolute URLs for external ones

---

## 🧪 Exercise

1. Create a file named `links-images.html`
2. Add:

   * A heading: "My Links"
   * 3 clickable text links (open at least 1 in new tab)
   * A section with at least 2 images using relative paths
   * One clickable image (links to Google or any site)
