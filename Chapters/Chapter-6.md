# ✅ Chapter 6: Lists and Tables in HTML

---

## 📝 Lists in HTML

HTML provides three types of lists:

---

### 1️⃣ **Unordered List**: `<ul>`

* Uses **bullets**
* Commonly used for menus or random lists

```html
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
</ul>
```

🔘 Output:

* HTML
* CSS
* JavaScript

---

### 2️⃣ **Ordered List**: `<ol>`

* Uses **numbers or letters**
* Useful for steps or rankings

```html
<ol>
  <li>Wake Up</li>
  <li>Brush Teeth</li>
  <li>Code HTML</li>
</ol>
```

🔢 Output:

1. Wake Up
2. Brush Teeth
3. Code HTML

---

### 3️⃣ **Definition List**: `<dl>`

* For **terms and descriptions**

```html
<dl>
  <dt>HTML</dt>
  <dd>Standard language for creating web pages</dd>
  <dt>CSS</dt>
  <dd>Used to style HTML elements</dd>
</dl>
```

📘 Output:
**HTML**
↳ Standard language for creating web pages
**CSS**
↳ Used to style HTML elements

---

## 📊 Tables in HTML

Tables help display data in **rows and columns**.

### Basic Structure:

```html
<table>
  <tr>
    <th>Heading 1</th>
    <th>Heading 2</th>
  </tr>
  <tr>
    <td>Row 1 Data 1</td>
    <td>Row 1 Data 2</td>
  </tr>
</table>
```

| Heading 1    | Heading 2    |
| ------------ | ------------ |
| Row 1 Data 1 | Row 1 Data 2 |

---

## 🔍 Table Tags Summary

| Tag       | Meaning                        |
| --------- | ------------------------------ |
| `<table>` | Starts the table               |
| `<tr>`    | Table row                      |
| `<th>`    | Table header (bold & centered) |
| `<td>`    | Table data (normal cell)       |
| `<thead>` | Table header section           |
| `<tbody>` | Table body section             |
| `colspan` | Merge columns                  |
| `rowspan` | Merge rows                     |

---

### Example: Table with `colspan` and `rowspan`

```html
<table border="1">
  <tr>
    <th rowspan="2">Plan</th>
    <th colspan="2">Pricing</th>
  </tr>
  <tr>
    <td>Monthly</td>
    <td>Yearly</td>
  </tr>
  <tr>
    <td>Basic</td>
    <td>$5</td>
    <td>$50</td>
  </tr>
</table>
```

---

## 💡 Hands-On Task 1: Create a Pricing Table

### Create a file `pricing.html`

```html
<!DOCTYPE html>
<html>
<head>
  <title>Pricing Plans</title>
</head>
<body>

  <h1>Our Plans</h1>
  <table border="1">
    <tr>
      <th>Plan</th>
      <th>Monthly</th>
      <th>Yearly</th>
    </tr>
    <tr>
      <td>Basic</td>
      <td>$5</td>
      <td>$50</td>
    </tr>
    <tr>
      <td>Premium</td>
      <td>$15</td>
      <td>$150</td>
    </tr>
  </table>

</body>
</html>
```

---

## 💡 Hands-On Task 2: Create an FAQ List

```html
<!DOCTYPE html>
<html>
<head>
  <title>FAQ</title>
</head>
<body>

  <h1>Frequently Asked Questions</h1>
  <dl>
    <dt>What is HTML?</dt>
    <dd>HTML is used to build websites.</dd>

    <dt>Is HTML easy?</dt>
    <dd>Yes! Very easy to start with.</dd>
  </dl>

</body>
</html>
```

---

## ✅ Summary

* Use `<ul>` for bullet lists and `<ol>` for numbered lists
* `<dl>`, `<dt>`, `<dd>` create definition-style lists
* Tables are made with `<table>`, `<tr>`, `<th>`, and `<td>`
* `colspan` and `rowspan` merge cells horizontally and vertically
* Always keep table content structured and meaningful

---

## 🧪 Exercise

1. Create `lists-tables.html`
2. Add:

   * A heading: "Course Curriculum"
   * An unordered list of topics
   * A definition list explaining 2 terms
   * A table showing 3 subscription plans and their pricing
