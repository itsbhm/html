# ✅ Chapter 4: Text and Formatting in HTML

---

## 📝 Headings: `<h1>` to `<h6>`

HTML offers **6 levels of headings**, where:

* `<h1>` is the **largest and most important**
* `<h6>` is the **smallest and least important**

### Example:

```html
<h1>Main Title</h1>
<h2>Section Heading</h2>
<h3>Subsection</h3>
<h6>Fine Print or Notes</h6>
```

🔍 Browsers automatically add space **above and below** headings.

---

## 📑 Paragraphs: `<p>`

Used to create regular text blocks.

```html
<p>This is a paragraph of content. It wraps long lines automatically.</p>
```

✅ Browsers also add spacing around `<p>` by default.

---

## ✨ Formatting Text with Tags

| Tag        | Purpose                   | Example Usage                  |
| ---------- | ------------------------- | ------------------------------ |
| `<b>`      | Bold (no importance)      | `<b>Bold Text</b>`             |
| `<strong>` | Bold (important emphasis) | `<strong>Warning!</strong>`    |
| `<i>`      | Italic (no importance)    | `<i>This is italic</i>`        |
| `<em>`     | Italic (with importance)  | `<em>Read this carefully</em>` |
| `<u>`      | Underline                 | `<u>Underlined text</u>`       |

🔎 Use `<strong>` and `<em>` when the emphasis is meaningful (good for SEO & screen readers).

---

## 📏 Line Break and Horizontal Rule

### Line Break: `<br>`

* Creates a new line within a paragraph or sentence.
* Self-closing tag.

```html
<p>This is line one.<br>This is line two.</p>
```

### Horizontal Rule: `<hr>`

* Inserts a horizontal divider.

```html
<p>Section Above</p>
<hr>
<p>Section Below</p>
```

---

## 🔬 Subscript and Superscript

| Tag     | Use                          | Example              |
| ------- | ---------------------------- | -------------------- |
| `<sub>` | Subscript (below baseline)   | `H<sub>2</sub>O`     |
| `<sup>` | Superscript (above baseline) | `E = mc<sup>2</sup>` |

---

## 🔠 Big and Small Text

| Tag       | Description         |
| --------- | ------------------- |
| `<big>`   | Increases text size |
| `<small>` | Decreases text size |

Example:

```html
<p>This is <big>big</big> and <small>small</small> text.</p>
```

🛑 Note: These tags are not commonly used in modern HTML and may be replaced by CSS later.

---

## 🧾 Preformatted Text: `<pre>`

Displays text **exactly as typed**, including **spaces and line breaks**.
Useful for showing code or tabular data.

```html
<pre>
Name    Age
Alice   22
Bob     28
</pre>
```

---

## 💡 Hands-On Task: Create a Styled Article Page

### Step 1: Create `article.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>My First Article</title>
</head>
<body>

  <h1>Breaking News: HTML is Awesome!</h1>
  <p><strong>HTML</strong> stands for <em>HyperText Markup Language</em>. It is the foundation of the web.</p>

  <hr>

  <h2>Why Use HTML?</h2>
  <p>It is easy to learn.<br>It works on every browser.</p>

  <h3>Bonus</h3>
  <p>Water formula: H<sub>2</sub>O</p>
  <p>Einstein's Equation: E = mc<sup>2</sup></p>

  <pre>
Name      Role
Shubham   Developer
Aman      Designer
  </pre>

</body>
</html>
```

### Step 2: Open in browser using Live Server

---

## ✅ Summary

* Use `<h1>` to `<h6>` for headings
* `<p>` for paragraphs
* Formatting tags include:

  * Bold: `<b>`, `<strong>`
  * Italic: `<i>`, `<em>`
  * Underline: `<u>`
* Use `<br>` for line breaks and `<hr>` for horizontal lines
* `<sub>`, `<sup>` for chemical formulas, math, etc.
* `<pre>` preserves spaces and newlines

---

## 🧪 Exercise

1. Create a new file: `formatting.html`
2. Add:

   * A heading
   * A paragraph with bold and italic
   * Subscript and superscript examples
   * A `<pre>` block with aligned text
3. Save and view using Live Server
