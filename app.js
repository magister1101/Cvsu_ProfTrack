const currentTime = new Date();
let currentFormattedTime = currentTime.toTimeString().slice(0, 8);
let currentDay = currentTime.getDay(); // returns the day of the week (from 0 to 6), 0 = sunday
console.log(currentDay);

let newProfessor = { x: 90, y: -25, }; //Data to push
let keyToAddProfessors = 1;

//data of faculty that will show on the map
let teacherData = {
  1: [],
  2: [],
  3: [],
  4: [],
  5: [],
};


fetch('function/prof_information.php')
  .then(response => response.json())  
  .then(data => {
    // Assuming data is an array of objects with professor information

    // Process each object in the retrieved data array
    data.forEach(professor => {
      let newProfessor = {
        facultyName: professor.facultyName,
        startTime: professor.startTime,
        endTime: professor.endTime,
        room: professor.room,
        day: professor.day,
      };

      //room x01 = -92, 15
      //room x02 = -47, 15
      //room x03 = -2 , 15
      //room x04 = 42, 15
      //room x05 = 87, 15
  
      //each room has been assigned a specific coordinate
      if (professor.room == '101' || professor.room == '102' || professor.room == '103' || professor.room == '104' || professor.room == '105') //floor 1
      {
        keyToAddProfessors = 1;
        if (professor.room == '101'){
          newProfessor = {
            x: -92, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
        } else if (professor.room == '102'){
            newProfessor = {
              x: -47, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        } else if (professor.room == '103'){
            newProfessor = {
              x: -2, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        }
        else if (professor.room == '104'){
          newProfessor = {
            x: 42, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
      }
      else if (professor.room == '105'){
        newProfessor = {
          x: 87, y: 15, //coordinate of rooms which room
          facultyName: professor.facultyName,
          startTime: professor.startTime,
          endTime: professor.endTime,
          room: professor.room,
        };
      }
      } else if (professor.room == '201' || professor.room == '202' || professor.room == '203' || professor.room == '204' || professor.room == '205') //floor 2
      {
          keyToAddProfessors = 2;
          if (professor.room == '201'){
            newProfessor = {
              x: -92, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
          } else if (professor.room == '202'){
              newProfessor = {
                x: -47, y: 15, //coordinate of rooms which room
                facultyName: professor.facultyName,
                startTime: professor.startTime,
                endTime: professor.endTime,
                room: professor.room,
              };
          } else if (professor.room == '203'){
              newProfessor = {
                x: -2, y: 15, //coordinate of rooms which room
                facultyName: professor.facultyName,
                startTime: professor.startTime,
                endTime: professor.endTime,
                room: professor.room,
              };
          }
          else if (professor.room == '204'){
            newProfessor = {
              x: 42, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        }
        else if (professor.room == '205'){
          newProfessor = {
            x: 87, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
        }
      } else if (professor.room == '301' || professor.room == '302' || professor.room == '303' || professor.room == '304' || professor.room == '305') //floor 3
      {
          keyToAddProfessors = 3;
          if (professor.room == '301'){
            newProfessor = {
              x: -92, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
          } else if (professor.room == '302'){
              newProfessor = {
                x: -47, y: 15, //coordinate of rooms which room
                facultyName: professor.facultyName,
                startTime: professor.startTime,
                endTime: professor.endTime,
                room: professor.room,
              };
          } else if (professor.room == '303'){
              newProfessor = {
                x: -2, y: 15, //coordinate of rooms which room
                facultyName: professor.facultyName,
                startTime: professor.startTime,
                endTime: professor.endTime,
                room: professor.room,
              };
          }
          else if (professor.room == '304'){
            newProfessor = {
              x: 42, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        }
        else if (professor.room == '305'){
          newProfessor = {
            x: 87, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
        }
      } else if (professor.room == '401' || professor.room == '402' || professor.room == '403' || professor.room == '404' || professor.room == '405') //floor 4
      {
        keyToAddProfessors = 4;
        if (professor.room == '401'){
          newProfessor = {
            x: -92, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
        } else if (professor.room == '402'){
            newProfessor = {
              x: -47, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        } else if (professor.room == '403'){
            newProfessor = {
              x: -2, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        }
        else if (professor.room == '404'){
          newProfessor = {
            x: 42, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
      }
      else if (professor.room == '405'){
        newProfessor = {
          x: 87, y: 15, //coordinate of rooms which room
          facultyName: professor.facultyName,
          startTime: professor.startTime,
          endTime: professor.endTime,
          room: professor.room,
        };
      }
      } else if (professor.room == '501' || professor.room == '502' || professor.room == '503' || professor.room == '504' || professor.room == '505') //floor 5
      {
        keyToAddProfessors = 5;
        if (professor.room == '501'){
          newProfessor = {
            x: -92, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
        } else if (professor.room == '502'){
            newProfessor = {
              x: -47, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        } else if (professor.room == '503'){
            newProfessor = {
              x: -2, y: 15, //coordinate of rooms which room
              facultyName: professor.facultyName,
              startTime: professor.startTime,
              endTime: professor.endTime,
              room: professor.room,
            };
        }
        else if (professor.room == '504'){
          newProfessor = {
            x: 42, y: 15, //coordinate of rooms which room
            facultyName: professor.facultyName,
            startTime: professor.startTime,
            endTime: professor.endTime,
            room: professor.room,
          };
      }
      else if (professor.room == '505'){
        newProfessor = {
          x: 87, y: 15, //coordinate of rooms which room
          facultyName: professor.facultyName,
          startTime: professor.startTime,
          endTime: professor.endTime,
          room: professor.room,
        };
      }
      }
      
      if(currentDay == professor.day && currentFormattedTime > professor.startTime && currentFormattedTime < professor.endTime) // checks if the schedule of day and time is right
      {
        if (teacherData.hasOwnProperty(keyToAddProfessors)) {
          teacherData[keyToAddProfessors].push(newProfessor);
        } else {
          teacherData[keyToAddProfessors] = [newProfessor];
        }
      }
    });

        console.log(teacherData); //check in console on what data are currently populating the teacherData array
        updateMap(); //updates map at the start when the array has been populated
  })
  .catch(error => {
    console.error('Error fetching or processing the data:', error);
  });


// Initialize the map
const map = L.map('map', {
  minZoom: 1,
  maxZoom: 3
}).setView([0, 0], 2);

// IMAGE OF FLOORS IN MAP
const floorImages = {
  1: 'img/map-floor-1.png',
  2: 'img/map-floor-2.png',
  3: 'img/map-floor-3.png',
  4: 'img/map-floor-4.png',
  5: 'img/map-floor-5.png',
};

// Default floor
let currentFloor = 1;

// Group to hold markers for each floor
const markerGroup = L.layerGroup().addTo(map);

// Function to change the floor
function changeFloor(floor) {
  if (floor in floorImages) {
    currentFloor = floor;
    updateMap();
  }
}

// Function to update the map based on the current floor
function updateMap() {
  const imageUrl = floorImages[currentFloor];
  const imageBounds = [[-90, -180], [90, 180]]; // Adjust the bounds based on your image size

  // Clear existing layers
  map.eachLayer(layer => {
    if (layer instanceof L.ImageOverlay) {
      map.removeLayer(layer);
    }
  });

  // Add a custom image overlay for the current floor
  L.imageOverlay(imageUrl, imageBounds).addTo(map);

  // Clear existing markers
  markerGroup.clearLayers();

  // Add markers with custom image markers for the current floor
  const floorTeachers = teacherData[currentFloor];
  if (floorTeachers) {
    floorTeachers.forEach(data => {
      const markerIcon = L.icon({
        iconUrl: 'img/sampleIcon01.png', // Replace with faculty's image
        iconSize: [50, 50], // Adjust the size of the marker image
        iconAnchor: [15, 30], // Adjust the anchor point of the marker image
      });

      const marker = L.marker([data.y, data.x], { icon: markerIcon }); // Note: Reversed order for Leaflet
      marker.bindPopup(`<b>Faculty:</b> ${data.facultyName}, <b>Room:</b> ${data.room}`);
      markerGroup.addLayer(marker);
    });
  }
}


// Initial map setup
updateMap();
