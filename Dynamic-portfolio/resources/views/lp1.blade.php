<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Cards</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card {
      background-color: white;
      border: 1px solid #ccc;
      border-radius: 10px;
      width: 250px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: background-color 0.3s ease;
      cursor: pointer;
      overflow: hidden;
    }

    .card:hover {
      background-color: #e0e0e0;
    }

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-title {
      font-size: 18px;
      margin: 0 0 10px;
    }

    .card-description {
      font-size: 14px;
      color: #555;
    }

    .clicked-0 { background-color: #d0f0d0 !important; }
    .clicked-1 { background-color: #f0d0d0 !important; }
    .clicked-2 { background-color: #d0d0f0 !important; }
    .clicked-3 { background-color: #f0f0d0 !important; }
  </style>
</head>
<body>

  <div class="container">
    <div class="card" data-index="0" data-title="Project Alpha" data-description="This is the description for Project Alpha.">
      <img src="hhttps://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fflowers%2F&psig=AOvVaw1_4c1lMhPg41qyqwXM_7sI&ust=1750315496130000&source=images&cd=vfe&opi=89978449&ved=2ahUKEwiy0LO8r_qNAxWN3TgGHVIpClcQjRx6BAgAEBk" alt="Project Alpha">
      <div class="card-content">
        <h3 class="card-title">Project Alpha</h3>
        <p class="card-description">This is the description for Project Alpha.</p>
      </div>
    </div>

    <div class="card" data-index="1" data-title="Project Beta" data-description="This is the description for Project Beta.">
      <img src="https://mrwallpaper.com/images/hd/download-pretty-teen-girls-wallpaper-6vhii3luijrjmyyh.jpg" alt="Project Beta">
      <div class="card-content">
        <h3 class="card-title">Project Beta</h3>
        <p class="card-description">This is the description for Project Beta.</p>
      </div>
    </div>

    <div class="card" data-index="2" data-title="Project Gamma" data-description="This is the description for Project Gamma.">
      <img src="https://mrwallpaper.com/images/hd/download-pretty-teen-girls-wallpaper-6vhii3luijrjmyyh.jpg" alt="Project Gamma">
      <div class="card-content">
        <h3 class="card-title">Project Gamma</h3>
        <p class="card-description">This is the description for Project Gamma.</p>
      </div>
    </div>

    <div class="card" data-index="3" data-title="Project Delta" data-description="This is the description for Project Delta.">
      <img src="https://mrwallpaper.com/images/hd/download-pretty-teen-girls-wallpaper-6vhii3luijrjmyyh.jpg" alt="Project Delta">
      <div class="card-content">
        <h3 class="card-title">Project Delta</h3>
        <p class="card-description">This is the description for Project Delta.</p>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.card').forEach(card => {
      card.addEventListener('click', () => {
        const title = card.getAttribute('data-title');
        const description = card.getAttribute('data-description');
        const index = card.getAttribute('data-index');

        alert(Project: ${title}\nDescription: ${description});

        // Remove all previous clicked-* classes
        card.classList.remove('clicked-0', 'clicked-1', 'clicked-2', 'clicked-3');

        // Add the specific class for background color
        card.classList.add(clicked-${index});
      });
    });
  </script>

</body>
</html>