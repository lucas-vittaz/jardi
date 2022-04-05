mapboxgl.accessToken =
  "pk.eyJ1IjoibHVjYXN2aXR0YXoiLCJhIjoiY2wxY2JydjUyMDV6czNjbzAyYXJ5eXRnNiJ9.Tmfy8Rsb4m1E5lswQhsCyg";
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/lucasvittaz/cl1at5uxs005c14ukon6dwkqg",
  center: [-1.5509120011412292, 47.2964658816382],
  zoom: 10,
});
const nav = new mapboxgl.NavigationControl({ showZoom: !0, showCompass: !0 }),
  popup = new mapboxgl.Popup({ offset: 25 }).setText(
    "Jardi'CA - 06 42 00 66 77"
  );
map.addControl(nav, "bottom-right");
const marker = new mapboxgl.Marker({ color: "#b31717", draggable: !1 })
  .setLngLat([-1.5462427781604915, 47.3033093730367])
  .addTo(map)
  .setPopup(popup);
map.on("load", () => {
  map.getCanvas().style.cursor = "default";
  const e = document.getElementById("legend"),
    o = ["hsla(75, 60%, 17%, 0.4)", "hsla(74, 60%, 31%, 0.2)"];
  ["Zone d'intervention prioritaire", "Zone d'intervention possible"].forEach(
    (t, n) => {
      const r = o[n],
        a = document.createElement("div"),
        s = document.createElement("span");
      (s.className = "legend-key"), (s.style.backgroundColor = r);
      const l = document.createElement("span");
      (l.innerHTML = `${t}`),
        a.appendChild(s),
        a.appendChild(l),
        e.appendChild(a);
    }
  );
});
const ratio = 0.2;
var options = { root: null, rootMargin: "0px", threshold: 0.2 };
const handleIntersect = function (e, o) {
    e.forEach(function (e) {
      e.intersectionRatio > 0.2 &&
        (e.target.classList.add("reveal-visible"), o.unobserve(e.target));
    });
  },
  observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll(".reveal-right").forEach(function (e) {
  observer.observe(e);
}),
  document.querySelectorAll(".reveal-left").forEach(function (e) {
    observer.observe(e);
  }),
  document.querySelectorAll(".reveal-top").forEach(function (e) {
    observer.observe(e);
  }),
  document.querySelectorAll(".reveal-bottom").forEach(function (e) {
    observer.observe(e);
  });
