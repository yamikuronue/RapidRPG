INSERT INTO chars (fname, lname, gender, bday, description, personality, history, notes)
	VALUES 
		("Test", "McTest", "male", "1996-12-24", "This is a test", "Test personality", "No backstory", "These are notes"),
		("Ariana", "Grande", "female", "2015-1-1", "Pop singer", "Bubby and cat-ear-wearing", "Disney channel star", "No notes")
		;
		
INSERT INTO pages (name, slug, content, menu, menu_order)
	VALUES
		("home", "home", "<p>This is the home page! </p>","true",1),
		("about", "about", "<p>This is the about page! </p>","true",2)
		;