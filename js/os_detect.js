// Function to detect the user's operating system
function detectOS() {
    const userAgent = window.navigator.userAgent;
    if (userAgent.includes("Windows")) {
        return "Windows";
    } else if (userAgent.includes("Macintosh") || userAgent.includes("Mac OS")) {
        return "Mac OS";
    } else if (userAgent.includes("Linux")) {
        return "Linux";
    } else {
        return "Unknown";
    }
  }

  function changeIcon(os_type){
    const icon = document.getElementById("os_icon");
    const os = detectOS();
    windows = '/img/icons/operating_systems/windows.png';
    mac = '/img/icons/operating_systems/mac.png';
    linux = '/img/icons/operating_systems/linux.png';
    unknown = '/img/icons/operating_systems/unknown.png';

    switch (os) {
        case "Windows":
            icon.src = windows;
            break;
        case "Mac OS":
            icon.src = mac;
            break;
        case "Linux":
            icon.src = linux;
            break;
        default:
            icon.src = unknown;
      }

    
  }

  // Function to handle file downloads based on OS
  function downloadFile(file) {
    const os = detectOS();
    // You can customize the download link based on the detected OS
    switch (os) {
      case "Windows":
        window.location.href = "/downloads/" + file;
        break;
      case "Mac OS":
        window.location.href = "/downloads/" + file;
        break;
      case "Linux":
        window.location.href = "/downloads/" + file;
        break;
      default:
        alert("Sorry, we couldn't detect your operating system. Please choose the appropriate download link manually.");
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    detectOS();
    changeIcon();
 });