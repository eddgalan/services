print('Initializing MongoDB...');

// Create an example database and collection
db = db.getSiblingDB('example_db');

db.example_collection.insertOne({ initialized: true, timestamp: new Date() });

