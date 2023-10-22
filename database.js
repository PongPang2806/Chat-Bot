const mysql = require('mysql');
const { addConversationHistory } = require('./conversation');

function connectToDatabase() {
  const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'db_chat',//เปลี่ยน
  });

  return new Promise((resolve, reject) => {
    connection.connect((error) => {
      if (error) {
        reject(error);
      } else {
        resolve(connection);
      }
    });
  });
}

function getDataFromId(connection, id) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM building_ WHERE id = ?',
      [id],
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getDataFromBuildingName(connection) { //เลือกฟักชันfellBuildingName
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM building_ WHERE building_name IS NOT NULL ORDER BY RAND() LIMIT 1',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getDataFromName(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM building_ WHERE name IS NOT NULL ORDER BY RAND() LIMIT 1',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getDataFromLocality(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM location_ WHERE name IS NOT NULL ORDER BY RAND() LIMIT 1',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getDataFromRoom(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM room_ WHERE name IS NOT NULL ORDER BY RAND() LIMIT 1',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getRandomDataFromDessert(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM dessert_ WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getRandomDataFromRestaurant(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM restaurant_ WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getRandomDataFromGrilled_shabu(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM grilled_shabu WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}


function getRandomDataFromMuslim(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM muslim_  WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getRandomDataFromNoodles(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM noodles_ WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

function getRandomDataFromPharmacy(connection) {
  return new Promise((resolve, reject) => {
    connection.query(
      'SELECT * FROM pharmacy_ WHERE name IS NOT NULL ORDER BY RAND()',
      (error, results, fields) => {
        if (error) {
          reject(error);
        } else {
          if (results && results.length > 0) {
            resolve(results[0]);
          } else {
            reject('No data found');
          }
        }
      }
    );
  });
}

module.exports = {
  connectToDatabase,
  getDataFromId,
  getDataFromBuildingName,
  getDataFromName,
  getDataFromRoom,
  getDataFromLocality,
  getRandomDataFromDessert,
  getRandomDataFromGrilled_shabu,
  getRandomDataFromMuslim,
  getRandomDataFromNoodles,
  getRandomDataFromPharmacy,
  getRandomDataFromRestaurant,
  addConversationHistory
};

