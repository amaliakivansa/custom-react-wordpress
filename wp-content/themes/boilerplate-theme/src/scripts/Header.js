import React from 'react';
import ReactDOM from 'react-dom/client';

function Header() {
  return (
    <nav className="navbar">
      <div className="navbar-left">
        <a href="/" className="logo">
          U Digital
        </a>
      </div>
      {/* <div className="navbar-center">
        <ul className="nav-links">
          <li>
            <a href="/products">Products</a>
          </li>
          <li>
            <a href="/about">About Us</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </div> */}
      <div className="navbar-right">
        <ul className="nav-links">
          <li>
            <a href="/products">Products</a>
          </li>
          <li>
            <a href="/about">About Us</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  );
}

// Check if the element exists before rendering
const header = document.getElementById('header');
if (header) {
  const root = ReactDOM.createRoot(header);
  root.render(<Header />);
} else {
  console.error("Element with ID 'header' not found.");
}
