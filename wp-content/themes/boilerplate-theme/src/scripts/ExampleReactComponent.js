import React from 'react';
import ReactDOM from 'react-dom/client';

function ExampleReactComponent() {
  return (
    <header className='example-react-component'>
      {/* <h1>Example react component</h1> */}
    </header>
  );
}

// Check if the element exists before rendering
const example = document.getElementById('render-react-example-here');
if (example) {
  const root = ReactDOM.createRoot(example);
  root.render(<ExampleReactComponent />);
} else {
  console.error("Element with ID 'render-react-example-her' not found.");
}
