const header = document.getElementById("header");
header.addEventListener("click", function () {
  location.reload();
});
document.getElementById("showMore").addEventListener("click", function () {
  var extraAnnouncements = document.querySelectorAll(".extra-announcement");
  for (var i = 0; i < extraAnnouncements.length; i++) {
    extraAnnouncements[i].style.display = "block";
  }
  this.style.display = "none";
  document.getElementById("showLess").style.display = "inline";
});

document.getElementById("showLess").addEventListener("click", function () {
  var extraAnnouncements = document.querySelectorAll(".extra-announcement");
  for (var i = 0; i < extraAnnouncements.length; i++) {
    extraAnnouncements[i].style.display = "none";
  }
  this.style.display = "none";
  document.getElementById("showMore").style.display = "inline";
});

document.querySelectorAll(".navbar a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

document.addEventListener("OznamyLoaded", function () {
  const oznamy = window.oznamy || [];
  const announcementsContainer = document.getElementById("announcements-container");

  announcementsContainer.innerHTML = '';

  oznamy.forEach((oznam, index) => {
    if (oznam.nazov && oznam.datum && oznam.text) {
      const announcementDiv = document.createElement("div");

      const announcementHeaderDiv = document.createElement("div");
      announcementHeaderDiv.classList.add("announcement-header");

      const titleElement = document.createElement("h3");
      titleElement.textContent = oznam.nazov;

      const dateElement = document.createElement("p");
      dateElement.classList.add("announcement-date");
      dateElement.textContent = "Dátum pridania: " + oznam.datum;

      const textElement = document.createElement("p");
      textElement.className = "annoucement-text";
      textElement.innerHTML = oznam.text.replace(/\n/g, "<br>");

      announcementHeaderDiv.appendChild(titleElement);
      announcementHeaderDiv.appendChild(dateElement);

      announcementDiv.appendChild(announcementHeaderDiv);
      announcementDiv.appendChild(textElement);

      announcementsContainer.appendChild(announcementDiv);

      var classesToAdd =
        index > 2 ? ["announcement", "extra-announcement"] : ["announcement"];
      announcementDiv.classList.add(...classesToAdd);
    }
  });

  getSize();

  const showMoreButton = document.getElementById("showMore");
  const showLessButton = document.getElementById("showLess");

  if (oznamy.length > 3) {
    showMoreButton.style.display = "block";
  }

  showMoreButton.addEventListener("click", function () {
    document
      .querySelectorAll(".extra-announcement")
      .forEach((extraAnnouncement) => {
        extraAnnouncement.style.display = "block";
      });

    showMoreButton.style.display = "none";
    showLessButton.style.display = "block";
    getSize();
  });

  showLessButton.addEventListener("click", function () {
    document
      .querySelectorAll(".extra-announcement")
      .forEach((extraAnnouncement) => {
        extraAnnouncement.style.display = "none";
      });

    showMoreButton.style.display = "block";
    showLessButton.style.display = "none";
    getSize();
  });
});

window.addEventListener("resize", getSize);

function removeElementByText(el, searchText) {
  var elementsToRemove = Array.from(el.getElementsByTagName('*')).filter(function(element) {
    return element.textContent.includes(searchText);
  });
 
  elementsToRemove.forEach(function(element) {
    element.parentNode.removeChild(element);
  });
}

function getSize() {
  document.querySelectorAll(".announcement").forEach(($oznam) => {
    const MAX_HEIGHT = 150;
    var $oznamText = $oznam.querySelector("p.annoucement-text");
    var $shadow = $oznam.querySelector(".shadow");
    var $show_more_button = $oznam.querySelector(".show-more-button");
    var $show_less_button = $oznam.querySelector(".show-less-button");
    if ($oznamText.clientHeight < MAX_HEIGHT) {
      if($shadow) {
        $shadow.remove();
        $show_less_button.remove();
        $show_more_button.remove();
      }
 
      removeElementByText($oznam, "Zobraziť viac");
      removeElementByText($oznam, "Zobraziť menej");
    }
    if ($oznamText && !$shadow) {
      if ($oznamText.clientHeight >= MAX_HEIGHT) {
        const shadowElement = document.createElement("span");
        shadowElement.className = "shadow";
        $oznamText.insertAdjacentElement("beforeend", shadowElement);

        const showMoreDiv = document.createElement("div");
        showMoreDiv.textContent = "Prečítať viac";
        showMoreDiv.className = "show-more-button";
        $oznam.appendChild(showMoreDiv);

        const showLessDiv = document.createElement("div");
        showLessDiv.textContent = "Prečítať menej";
        showLessDiv.className = "show-less-button";
        $oznam.appendChild(showLessDiv);
        showLessDiv.style.display = "none";

        if ($oznamText.clientHeight > MAX_HEIGHT){
          $oznamText.classList.add("announcement-opened");
          showLessDiv.style.display = "block";
          showMoreDiv.style.display = "none";
          shadowElement.style.display = "none";
        }

        showMoreDiv.addEventListener("click", (e) => {
          $oznamText.classList.add("announcement-opened");
          showLessDiv.style.display = "block";
          showMoreDiv.style.display = "none";
          shadowElement.style.display = "none";
        });
        showLessDiv.addEventListener("click", (e) => {
          $oznamText.classList.remove("announcement-opened");
          showLessDiv.style.display = "none";
          showMoreDiv.style.display = "block";
          shadowElement.style.display = "block";
        });
      }
    }
  });
}
