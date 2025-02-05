CREATE TYPE user_role AS ENUM ('admin', 'user');
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    full_name VARCHAR(20),
    password_hash VARCHAR(255),
    role user_role DEFAULT 'user'  
);
CREATE TABLE article (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INTEGER REFERENCES users(id) ON DELETE CASCADE
);