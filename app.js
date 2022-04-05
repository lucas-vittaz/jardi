// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();

window.axeptioSettings = {
  clientId: "6240919396d9bf5662489695",
  cookiesVersion: "jardica",
};

(function (d, s) {
  var t = d.getElementsByTagName(s)[0],
    e = d.createElement(s);
  e.async = true;
  e.src = "//static.axept.io/sdk.js";
  t.parentNode.insertBefore(e, t);
})(document, "script");

// MAPBOX API
mapboxgl.accessToken =
  "pk.eyJ1IjoibHVjYXN2aXR0YXoiLCJhIjoiY2wxY2JydjUyMDV6czNjbzAyYXJ5eXRnNiJ9.Tmfy8Rsb4m1E5lswQhsCyg";
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/lucasvittaz/cl1at5uxs005c14ukon6dwkqg",
  center: [-1.5509120011412292, 47.2964658816382],
  zoom: 10,
});
//ADD MARKER
const nav = new mapboxgl.NavigationControl({
  showZoom: true,
  showCompass: true,
});
const popup = new mapboxgl.Popup({ offset: 25 }).setText(
  "Jardi'CA - 06 42 00 66 77"
);
map.addControl(nav, "bottom-right");
const marker = new mapboxgl.Marker({
  color: "#b31717",
  draggable: false,
})
  .setLngLat([-1.5462427781604915, 47.3033093730367])
  .addTo(map)
  .setPopup(popup);

//ADD LEGEND
map.on("load", () => {
  map.getCanvas().style.cursor = "default";

  const legend = document.getElementById("legend");

  const layers = [
    "Zone d'intervention prioritaire",
    "Zone d'intervention possible",
  ];
  const colors = ["hsla(75, 60%, 17%, 0.4)", "hsla(74, 60%, 31%, 0.2)"];

  layers.forEach((layer, i) => {
    const color = colors[i];
    const item = document.createElement("div");
    const key = document.createElement("span");
    key.className = "legend-key";
    key.style.backgroundColor = color;

    const value = document.createElement("span");
    value.innerHTML = `${layer}`;
    item.appendChild(key);
    item.appendChild(value);
    legend.appendChild(item);
  });
});

//INTERSECTION OBSERVER API
const ratio = 0.2;

var options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
};

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add("reveal-visible");
      // observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll(".reveal-right").forEach(function (visible) {
  observer.observe(visible);
});
document.querySelectorAll(".reveal-left").forEach(function (visible) {
  observer.observe(visible);
});
document.querySelectorAll(".reveal-top").forEach(function (visible) {
  observer.observe(visible);
});
document.querySelectorAll(".reveal-bottom").forEach(function (visible) {
  observer.observe(visible);
});
//1.00
