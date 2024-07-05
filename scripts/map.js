import '../assets/templates.css';
import Map from '../data/ol/Map.js';
import OSM from '../data/ol/source/OSM.js';
import TileLayer from '../data/ol/layer/Tile.js';
import View from '../data/ol/View.js';

const map = new Map({
  target: 'map',
  layers: [
    new TileLayer({
      source: new OSM(),
    }),
  ],
  view: new View({
    center: [0, 0],
    zoom: 2,
  }),
});