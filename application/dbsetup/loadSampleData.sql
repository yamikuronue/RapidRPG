-- Test credentials: admin, admin   and   user, password

INSERT INTO users (username, pass, email, mature, tagger, admin, receiveMail)
	VALUES
		("admin", "$2a$10$Q2zT/gYySBkjzu9MVp/9H.9uHdb9ND6G4uXRpFiLrz68qeKx2A2pm", "admin@example.com", "true", "true", "true", "false"),
		("user", "$2a$10$u/0meQ4WmFm8Ldv79xc02.7CAruGU9.Ye.2ydkmHkJQPGri6lgHre", "nonadmin@example.com", "false", "false", "false", "false")
		;
		

INSERT INTO chars (owner, fname, lname, gender, bday, description, personality, history, notes)
	VALUES 
		((select userID from users where username='admin'), "Test", "McTest", "male", "1996-12-24", "This is a test", "Test personality", "No backstory", "These are notes"),
		((select userID from users where username='user'), "Ariana", "Grande", "female", "2015-1-1", "Pop singer", "Bubby and cat-ear-wearing", "Disney channel star", "No notes")
		;
		
INSERT INTO pages (name, slug, content, menu, menu_order)
	VALUES
		("home", "home", "<p>This is the home page! </p>","true",1),
		("about", "about", "<p>This is the about page! </p>","true",2)
		;
		
		
		
