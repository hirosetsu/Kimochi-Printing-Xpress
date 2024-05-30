const express = require('express');
const multer = require('multer');
const app = express();
const upload = multer({ dest: 'uploads/' }); // Set up multer for image uploads

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Example route for handling the product addition
app.post('/addProduct', upload.array('productImages'), (req, res) => {
    const { productName, productDescription, productPrice, productCategory, stockQuantity } = req.body;
    const productImages = req.files;

    // Perform validation
    if (!productName || !productDescription || !productPrice || !productCategory || !stockQuantity) {
        return res.status(400).send('All fields are required.');
    }

    // Save product to database (pseudo-code, replace with actual database logic)
    const newProduct = {
        name: productName,
        description: productDescription,
        price: productPrice,
        category: productCategory,
        images: productImages.map(file => file.path), // Store paths to uploaded images
        stock: stockQuantity,
    };

    // Save newProduct to your database here

    res.status(201).send('Product added successfully.');
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});

const isAuthenticated = (req, res, next) => {
  // Pseudo-code for authentication check
  if (req.user && req.user.role === 'storeOwner') {
      return next();
  }
  res.status(403).send('Unauthorized');
};

// Use the isAuthenticated middleware
app.post('/addProduct', isAuthenticated, upload.array('productImages'), (req, res) => {
  // Existing product addition logic
});

