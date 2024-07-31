<?php
      session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css"/>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="#" class="button" id="dashboardBtn">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="button" id="listBtn">
            <i class="fas fa-list"></i>
            <span>List</span>
          </a>
        </li>
        <li>
          <a href="#" class="button" id="boardBtn">
            <i class="fas fa-columns"></i>
            <span>Board</span>
          </a>
        </li>
        <li>
          <a href="#" class="button" id="notesBtn">
            <i class="fas fa-sticky-note"></i>
            <span>Notes</span>
          </a>
        </li>
        <li>
          <a href="#" class="button" id="calendarBtn">
            <i class="fas fa-calendar-alt"></i>
            <span>Calendar</span>
          </a>
        </li>
        <li>
          <a href="index.php" class="button" id="faqBtn" name="leave">
          <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
    </ul>
    </div>

    <div class="main-content-wrapper">
      <div class="main-content-dashboard" id="dashboardPage">
        <object data="dashboardpage.php" ></object>
      </div>
      <div class="main-content" id="profilePage" style="display:none;">

      </div>
      <div class="main-content-list" id="listPage" style="display:none;">
       
        <object data="list.php"></object>
      </div>
      <div class="main-content-board" id="boardPage" style="display:none;">
        <object data="kanbanboard.php"></object>
      </div>
      <div class="main-content-notes" id="notesPage" style="display:none;">
        <object data="notes.php"></object>
      </div>
      <div class="main-content-calender" id="calendarPage" style="display:none;">
        <object data="calender.php"></object>
      </div>
    </div>

    <script>
     const buttons = document.querySelectorAll('.button');
     const pages = document.querySelectorAll('.main-content, .main-content-dashboard, .main-content-list, .main-content-notes, .main-content-board,.main-content-calender');

    buttons.forEach(button => {
    button.addEventListener('click', () => {
    const pageId = button.id.replace('Btn', 'Page');
    const targetPage = document.getElementById(pageId);

    // Hide all pages
    pages.forEach(page => {
      page.style.display = 'none';
    });

    // Show the selected page
    if (targetPage) {
      targetPage.style.display = 'flex';
      targetPage.style.flexDirection = 'column';
      targetPage.style.justifyContent = 'center';
      targetPage.style.alignItems = 'center';
    }

    // Toggle active class
    document.querySelector('.active')?.classList.remove('active');
    button.parentElement.classList.add('active');
  });
});
    </script>
</body>
</html>