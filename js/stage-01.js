class Walker {
	int x;
	int y;
	walker w;

	walker() {
		// origin center ( O )
		x = width/2;
		y = height/2;
	}

	void display() {
		// show object
		stroke(0);
		point(x,y);
	}

	void step() {
		// choose a random floating number ( 0, 1, 2 or 3 )
		int choice = int(random(4));

		// assign direction
		if (choice == 0) {
			// up
			x++;
		} else if (choice == 1) {
			// down
			x--;
		} else if (choice == 2) {
			// right
			y++;
		} else {
			// left
			y--;
		}
	}

	void setup() {
		// create the walker
		size(640,320);
		w = new walker();
		background(255);
	}

	void draw() {
		// call on walke
		w.step();
		w.display();
}
