// Function to detect the user's operating system
function detectOS() {
    win_icon = '/img/icons/operating_systems/windows.png';
    linux_icon = '/img/icons/operating_systems/linux.png';
    unknown_icon = '/img/icons/operating_systems/unknown.png';
    const userAgent = window.navigator.userAgent;
    const icon = document.getElementById("os_icon");
    if (userAgent.includes("Windows")) {
        icon.src = win_icon;
        return "Windows";
    } else if (userAgent.includes("Macintosh") || userAgent.includes("Mac OS")) {
        icon.src = win_icon;
        return "Mac OS";
    } else if (userAgent.includes("Linux")) {
        icon.src = linux_icon;
        return "Linux";
    } else {
        icon.src = unknown_icon;
        return "Unknown";
    }
  }

  // Function to handle file downloads based on OS
  function downloadFile() {
    const os = detectOS();
    
    // You can customize the download link based on the detected OS
    switch (os) {
      case "Windows":
        window.location.href = "download/windows-file.zip";
        break;
      case "Mac OS":
        window.location.href = "download/mac-file.dmg";
        break;
      case "Linux":
        window.location.href = "download/linux-file.tar.gz";
        break;
      default:
        alert("Sorry, we couldn't detect your operating system. Please choose the appropriate download link manually.");
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    detectOS();
 });