<template>
    <div class="sidebar">
      <div class="content">
        <!-- Add your sidebar content here -->
        <h2>Sidebar</h2>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "SidebarLeft",
  };
  </script>
  
  <style scoped>
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 550px;
    height: 100vh; /* Full height */
    background-color: #2c3e50; /* Dark background */
    color: white; /* Text color */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3); /* Add some shadow for depth */
    z-index: 1000; /* Ensure it stays on top */
    overflow-y: auto; /* Scrollable content if it overflows */
  }
  
  .content {
    padding: 20px;
  }
  
  .content h2 {
    margin-top: 0;
  }
  
  .content ul {
    list-style-type: none;
    padding: 0;
  }
  
  .content li {
    margin: 10px 0;
  }
  
  .content a {
    color: white;
    text-decoration: none;
    transition: color 0.3s;
  }
  
  .content a:hover {
    color: #1abc9c; /* Highlight color */
  }
  </style>
  