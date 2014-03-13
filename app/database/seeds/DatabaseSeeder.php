<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('SubjectTableSeeder');
        $this->call('CollegeTableSeeder');
        $this->call('CourseTableSeeder');
        $this->call('CurriculumTableSeeder');
        $this->call('SemesterTableSeeder');
        $this->call('CurriculumDataTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('StudentTableSeeder');
        $this->call('EnrolledSubjectTableSeeder');
        $this->call('SchoolYearTableSeeder');
        $this->call('ConfigTableSeeder');
        $this->call('SubjectPrerequisiteTableSeeder');
        $this->call('SubjectCorequisiteTableSeeder');
	}
}

class SubjectTableSeeder extends Seeder {

    public function run()
    {
        DB::table('subjects')->delete();

        DB::table('subjects')->insert(
            array(
                array('code' => 'IT 11',      'name' => 'IT Fundamentals',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 12',      'name' => 'Introduction to Programming',                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 14',      'name' => 'Multimedia Systems',                                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 21',      'name' => 'Intermediate Programming',                           'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 23',      'name' => 'Discrete Structures',                                'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 24',      'name' => 'Data Structures',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 25',      'name' => 'Computer Organization',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 26',      'name' => 'Object-Oriented Programming',                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 31',      'name' => 'Systems Analysis & Design',                          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 33',      'name' => 'Database Management Systems',                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 35',      'name' => 'Operating Systems',                                  'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 37',      'name' => 'Network Technology',                                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 39',      'name' => 'Elective I',                                         'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 32',      'name' => 'Software Engineering',                               'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 34',      'name' => 'Web Development',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 36',      'name' => 'Elective II',                                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 38',      'name' => 'Internship',                                         'unit' => 9.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 41',      'name' => 'Independent Study I w/ Technopreneurship',           'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 43',      'name' => 'IT Elective III',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 45',      'name' => 'IT Elective IV',                                     'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 47',      'name' => 'IT Elective V',                                      'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 49',      'name' => 'IT Elective VI',                                     'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 40',      'name' => 'Computer Ethics',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 42',      'name' => 'Independent Study II',                               'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 44',      'name' => 'IT Elective VII',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'IT 46',      'name' => 'IT Elective VIII',                                   'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 1',     'name' => 'Math 1',                                             'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 11',    'name' => 'College Algebra',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 12',    'name' => 'Plane Trigonometry',                                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 16',    'name' => 'Statistics',                                         'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 25',    'name' => 'Analytic Geometry / Calculus I',                     'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'BC 1',       'name' => 'BC 1',                                               'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'BC 11',      'name' => 'Preparatory English 2',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'BC 12',      'name' => 'Basic Communication I',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'BC 25',      'name' => 'Research Writing in the Disciplines',                'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Rel 11',     'name' => 'Old Testament Message',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Rel 22',     'name' => 'New Testament Message',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Socio 11 R', 'name' => 'Introduction to Society',                            'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Psych 11 R', 'name' => 'General Psychology',                                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PE 11',      'name' => 'Basic Physical Education',                           'unit' => 2.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PE 12',      'name' => 'Basic Physical Education',                           'unit' => 2.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PE 21',      'name' => 'Basic Physical Education',                           'unit' => 2.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PE 22',      'name' => 'Basic Physical Education',                           'unit' => 2.0, 'availability' => 1, 'active' => 1),
                array('code' => 'NSTP 1',     'name' => 'National Service Training Program',                  'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'NSTP 2',     'name' => 'National Service Training Program',                  'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Philo 31',   'name' => 'Introduction to Logic',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Physics 45', 'name' => 'General Physics I',                                  'unit' => 4.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Physics 46', 'name' => 'General Physics II',                                 'unit' => 4.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Fil 13',     'name' => 'Sining ng Pakikipagtalastasan',                      'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Fil 26',     'name' => 'Pagbasa at Pagsulat sa Ibat-ibang Disiplina',        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Acctg 12',   'name' => 'Fundamentals of Accounting I',                       'unit' => 6.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Speech 23',  'name' => 'Speech and Oral Communication',                      'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'FA 51',      'name' => 'Understanding Arts',                                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Lit 21',     'name' => 'Literature of the Philippines',                      'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Rel 61',     'name' => 'Christian Ethics',                                   'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Hist 31',    'name' => 'Phil. History and Government w/ Phil. Constitution', 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Hist 41',    'name' => 'Rizal\'s Life and Works',                            'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 11',  'name' => 'CS Fundamentals',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 12',  'name' => 'Introduction to Programming',                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 21',  'name' => 'Intermediate Programming',                           'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 23',  'name' => 'Digital Design',                                     'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 22',  'name' => 'Computer Systems Organization',                      'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 24',  'name' => 'Data Structures',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 26',  'name' => 'Object-Oriented Analysis and Design',                'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 31',  'name' => 'Database Management Systems',                        'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 33',  'name' => 'Operating Systems',                                  'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 35',  'name' => 'Object-Oriented Programming (C++ or Java)',          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 37',  'name' => 'Analysis and Design of Algorithms',                  'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 39',  'name' => 'Discrete Structures',                                'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-1', 'name' => 'Elective I (see listing)',                           'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-2', 'name' => 'Elective II (see listing)',                          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 32',  'name' => 'Software Engineering',                               'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 34',  'name' => 'Web-based Programming',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-3', 'name' => 'Elective III (see listing)',                         'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-4', 'name' => 'Elective IV (see listing)',                          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-5', 'name' => 'Elective V (see listing)',                           'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 40',  'name' => 'Research Writing in Computer Science',               'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 41',  'name' => 'Data Communications and Networking',                 'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 43',  'name' => 'Automata Theory',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 45',  'name' => 'Thesis 1: (Research Project Analysis and Design)',   'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 47',  'name' => 'Microprocessor with Assembly Language',              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 49',  'name' => 'Programming Languages',                              'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-6', 'name' => 'Elective VI (see listing)',                          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 42',  'name' => 'Professional Ethics',                                'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 44',  'name' => 'Modeling and Simulation',                            'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 46',  'name' => 'Thesis 2: Research Project Implementation',          'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci 48',  'name' => 'Compiler Design',                                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'ComSci E-7', 'name' => 'Elective VII (see listing)',                         'unit' => 3.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PEP 1',      'name' => 'Personal Enhancement Program 1',                     'unit' => 0.0, 'availability' => 1, 'active' => 1),
                array('code' => 'PEP 2',      'name' => 'Personal Enhancement Program 2',                     'unit' => 0.0, 'availability' => 1, 'active' => 1),
                array('code' => 'Math 26',    'name' => 'Analytic Geometry / Calculus II',                    'unit' => 3.0, 'availability' => 1, 'active' => 1),
            )
        );
    }
}

class CollegeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('colleges')->delete();

        DB::table('colleges')->insert(
            array(
                array('name' => 'College of Computer Sciences', 'abbr' => 'CCS', 'active' => 1),
            )
        );
    }
}

class CourseTableSeeder extends Seeder {

    public function run()
    {
        DB::table('courses')->delete();

        DB::table('courses')->insert(
            array(
                array('college_id' => 1, 'name' => 'Bachelor of Science in Information Technology', 'abbr' => 'BSIT', 'active' => 1),
                array('college_id' => 1, 'name' => 'Bachelor of Science in Computer Science',       'abbr' => 'BSCS', 'active' => 1),
                array('college_id' => 1, 'name' => 'Bachelor of Science in Information System',     'abbr' => 'BSIS', 'active' => 1),
            )
        );
    }
}

class CurriculumTableSeeder extends Seeder {

    public function run()
    {
        DB::table('curriculums')->delete();

        DB::table('curriculums')->insert(
            array(
                array('course_id' => 1, 'name' => 'Bachelor of Science in Information Technology', 'abbr' => 'BSIT', 'revision' => '1', 'active' => 1),
                array('course_id' => 2, 'name' => 'Bachelor of Science in Computer Science', 'abbr' => 'BSCS', 'revision' => '2007-2008', 'active' => 1),
            )
        );
    }
}

class SemesterTableSeeder extends Seeder {

    public function run()
    {
        DB::table('semesters')->delete();

        DB::table('semesters')->insert(
            array(
                array('name' => 'First Semester',  'active' => 1),
                array('name' => 'Second Semester', 'active' => 1),
                array('name' => 'Summer',          'active' => 1),
            )
        );
    }
}

class CurriculumDataTableSeeder extends Seeder {

    public function run()
    {
        DB::table('curriculum_data')->delete();

        DB::table('curriculum_data')->insert(
            array(
                /* BSIT 1st Year 1st Semester */
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 1,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 28, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 33, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 38, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 39, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 36, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 40, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 1, 'subject_id' => 44, 'passing' => 1.0),
                /* BSIT 1st Year 2nd Semester */
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 2,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 3,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 29, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 30, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 46, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 34, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 37, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 41, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 1, 'semester_id' => 2, 'subject_id' => 45, 'passing' => 1.0),
                /* BSIT 2nd Year 1st Semester */
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 4,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 5,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 7,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 35, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 31, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 47, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 49, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 1, 'subject_id' => 42, 'passing' => 1.0),
                /* BSIT 2nd Year 2nd Semester */
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 6,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 8,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 51, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 48, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 50, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 52, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 2, 'semester_id' => 2, 'subject_id' => 43, 'passing' => 2.0),
                /* BSIT 3rd Year 1st Semester */
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 9,  'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 10, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 11, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 12, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 13, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 1, 'subject_id' => 53, 'passing' => 1.0),
                /* BSIT 3rd Year 2st Semester */
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 14, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 15, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 16, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 54, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 55, 'passing' => 1.0),
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 2, 'subject_id' => 56, 'passing' => 1.0),
                /* BSIT 4th Year Summer */
                array('curriculum_id' => 1, 'year' => 3, 'semester_id' => 3, 'subject_id' => 17, 'passing' => 2.0),
                /* BSIT 4th Year 1st Semester */
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 1, 'subject_id' => 18, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 1, 'subject_id' => 19, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 1, 'subject_id' => 20, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 1, 'subject_id' => 21, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 1, 'subject_id' => 22, 'passing' => 2.0),
                /* BSIT 4th Year 2nd Semester */
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 2, 'subject_id' => 23, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 2, 'subject_id' => 24, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 2, 'subject_id' => 25, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 2, 'subject_id' => 26, 'passing' => 2.0),
                array('curriculum_id' => 1, 'year' => 4, 'semester_id' => 2, 'subject_id' => 57, 'passing' => 1.0),
                /* BSCS 1st Year 1st Semester */
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 58, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 28, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 33, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 38, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 39, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 36, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 40, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 44, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 1, 'subject_id' => 89, 'passing' => 1.0),
                /* BSCS 1st Year 2nd Semester */
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 59, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 29, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 30, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 46, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 34, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 37, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 41, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 45, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 1, 'semester_id' => 2, 'subject_id' => 90, 'passing' => 1.0),
                /* BSCS 2nd Year 1st Semester */
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 60, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 61, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 31, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 47, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 53, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 49, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 1, 'subject_id' => 42, 'passing' => 1.0),
                /* BSCS 2nd Year 2nd Semester */
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 62, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 63, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 64, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 48, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 91, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 50, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 56, 'passing' => 1.0),
                array('curriculum_id' => 2, 'year' => 2, 'semester_id' => 2, 'subject_id' => 43, 'passing' => 1.0),
                /* BSCS 3rd Year 1st Semester */
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 65, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 66, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 67, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 68, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 69, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 70, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 71, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 1, 'subject_id' => 35, 'passing' => 2.0),
                /* BSCS 3rd Year 2nd Semester */
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 72, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 73, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 74, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 75, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 76, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 52, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 2, 'subject_id' => 55, 'passing' => 1.0),
                /* BSCS 4th Year Summer */
                array('curriculum_id' => 2, 'year' => 3, 'semester_id' => 3, 'subject_id' => 77, 'passing' => 2.0),
                /* BSCS 4th Year 1st Semester */
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 78, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 79, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 80, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 81, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 82, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 83, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 1, 'subject_id' => 57, 'passing' => 1.0),
                /* BSCS 4th Year 2nd Semester */
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 84, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 85, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 86, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 87, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 88, 'passing' => 2.0),
                array('curriculum_id' => 2, 'year' => 4, 'semester_id' => 2, 'subject_id' => 54, 'passing' => 1.0),
            )
        );
    }
}

class SubjectPrerequisiteTableSeeder extends Seeder {

    public function run()
    {
        DB::table('subject_prerequisite')->delete();

        DB::table('subject_prerequisite')->insert(
            array(
                /* BSCS 1st Year 1st Semester */
                array('subject_id' => 59, 'prerequisite_id' => 58),
                array('subject_id' => 28, 'prerequisite_id' => 27),
                /* BSCS 1st Year 2nd Semester */
                array('subject_id' => 59, 'prerequisite_id' => 58),
                array('subject_id' => 59, 'prerequisite_id' => 28),
                array('subject_id' => 29, 'prerequisite_id' => 28),
                array('subject_id' => 30, 'prerequisite_id' => 28),
                array('subject_id' => 34, 'prerequisite_id' => 33),
                array('subject_id' => 37, 'prerequisite_id' => 36),
                array('subject_id' => 41, 'prerequisite_id' => 40),
                array('subject_id' => 45, 'prerequisite_id' => 44),
                /* BSCS 2nd Year 1st Semester */
                array('subject_id' => 60, 'prerequisite_id' => 59),
                array('subject_id' => 60, 'prerequisite_id' => 46),
                array('subject_id' => 61, 'prerequisite_id' => 58),
                array('subject_id' => 61, 'prerequisite_id' => 46),
                array('subject_id' => 61, 'prerequisite_id' => 28),
                array('subject_id' => 31, 'prerequisite_id' => 29),
                array('subject_id' => 47, 'prerequisite_id' => 29),
                array('subject_id' => 42, 'prerequisite_id' => 40),
                /* BSCS 2nd Year 2nd Semester */
                array('subject_id' => 62, 'prerequisite_id' => 61),
                array('subject_id' => 63, 'prerequisite_id' => 60),
                array('subject_id' => 64, 'prerequisite_id' => 60),
                array('subject_id' => 48, 'prerequisite_id' => 47),
                array('subject_id' => 91, 'prerequisite_id' => 31),
                array('subject_id' => 50, 'prerequisite_id' => 49),
                array('subject_id' => 43, 'prerequisite_id' => 40),
                /* BSCS 3rd Year 1st Semester */
                array('subject_id' => 65, 'prerequisite_id' => 63),
                array('subject_id' => 66, 'prerequisite_id' => 62),
                array('subject_id' => 67, 'prerequisite_id' => 64),
                array('subject_id' => 68, 'prerequisite_id' => 63),
                array('subject_id' => 68, 'prerequisite_id' => 30),
                array('subject_id' => 69, 'prerequisite_id' => 63),
                array('subject_id' => 69, 'prerequisite_id' => 30),
                array('subject_id' => 70, 'prerequisite_id' => 60),
                array('subject_id' => 70, 'prerequisite_id' => 61),
                array('subject_id' => 70, 'prerequisite_id' => 62),
                array('subject_id' => 70, 'prerequisite_id' => 63),
                array('subject_id' => 70, 'prerequisite_id' => 64),
                array('subject_id' => 71, 'prerequisite_id' => 60),
                array('subject_id' => 71, 'prerequisite_id' => 61),
                array('subject_id' => 71, 'prerequisite_id' => 62),
                array('subject_id' => 71, 'prerequisite_id' => 63),
                array('subject_id' => 71, 'prerequisite_id' => 64),
                array('subject_id' => 35, 'prerequisite_id' => 34),
                /* BSCS 3rd Year 2nd Semester */
                array('subject_id' => 72, 'prerequisite_id' => 65),
                array('subject_id' => 72, 'prerequisite_id' => 67),
                array('subject_id' => 73, 'prerequisite_id' => 65),
                array('subject_id' => 73, 'prerequisite_id' => 67),
                array('subject_id' => 74, 'prerequisite_id' => 60),
                array('subject_id' => 74, 'prerequisite_id' => 61),
                array('subject_id' => 74, 'prerequisite_id' => 62),
                array('subject_id' => 74, 'prerequisite_id' => 63),
                array('subject_id' => 74, 'prerequisite_id' => 64),
                array('subject_id' => 75, 'prerequisite_id' => 60),
                array('subject_id' => 75, 'prerequisite_id' => 61),
                array('subject_id' => 75, 'prerequisite_id' => 62),
                array('subject_id' => 75, 'prerequisite_id' => 63),
                array('subject_id' => 75, 'prerequisite_id' => 64),
                array('subject_id' => 76, 'prerequisite_id' => 60),
                array('subject_id' => 76, 'prerequisite_id' => 61),
                array('subject_id' => 76, 'prerequisite_id' => 62),
                array('subject_id' => 76, 'prerequisite_id' => 63),
                array('subject_id' => 76, 'prerequisite_id' => 64),
                array('subject_id' => 52, 'prerequisite_id' => 35),
                array('subject_id' => 55, 'prerequisite_id' => 36),
                array('subject_id' => 55, 'prerequisite_id' => 37),
                /* BSCS 4th Year Summer */
                array('subject_id' => 77, 'prerequisite_id' => 72),
                array('subject_id' => 77, 'prerequisite_id' => 73),
                array('subject_id' => 77, 'prerequisite_id' => 35),
                /* BSCS 4th Year 1st Semester */
                array('subject_id' => 78, 'prerequisite_id' => 65),
                array('subject_id' => 78, 'prerequisite_id' => 66),
                array('subject_id' => 78, 'prerequisite_id' => 67),
                array('subject_id' => 78, 'prerequisite_id' => 68),
                array('subject_id' => 78, 'prerequisite_id' => 69),
                array('subject_id' => 78, 'prerequisite_id' => 70),
                array('subject_id' => 78, 'prerequisite_id' => 71),
                array('subject_id' => 78, 'prerequisite_id' => 72),
                array('subject_id' => 78, 'prerequisite_id' => 73),
                array('subject_id' => 78, 'prerequisite_id' => 74),
                array('subject_id' => 78, 'prerequisite_id' => 75),
                array('subject_id' => 78, 'prerequisite_id' => 76),
                array('subject_id' => 79, 'prerequisite_id' => 65),
                array('subject_id' => 79, 'prerequisite_id' => 66),
                array('subject_id' => 79, 'prerequisite_id' => 67),
                array('subject_id' => 79, 'prerequisite_id' => 68),
                array('subject_id' => 79, 'prerequisite_id' => 69),
                array('subject_id' => 79, 'prerequisite_id' => 70),
                array('subject_id' => 79, 'prerequisite_id' => 71),
                array('subject_id' => 79, 'prerequisite_id' => 72),
                array('subject_id' => 79, 'prerequisite_id' => 73),
                array('subject_id' => 79, 'prerequisite_id' => 74),
                array('subject_id' => 79, 'prerequisite_id' => 75),
                array('subject_id' => 79, 'prerequisite_id' => 76),
                array('subject_id' => 80, 'prerequisite_id' => 77),
                array('subject_id' => 81, 'prerequisite_id' => 65),
                array('subject_id' => 81, 'prerequisite_id' => 66),
                array('subject_id' => 81, 'prerequisite_id' => 67),
                array('subject_id' => 81, 'prerequisite_id' => 68),
                array('subject_id' => 81, 'prerequisite_id' => 69),
                array('subject_id' => 81, 'prerequisite_id' => 70),
                array('subject_id' => 81, 'prerequisite_id' => 71),
                array('subject_id' => 81, 'prerequisite_id' => 72),
                array('subject_id' => 81, 'prerequisite_id' => 73),
                array('subject_id' => 81, 'prerequisite_id' => 74),
                array('subject_id' => 81, 'prerequisite_id' => 75),
                array('subject_id' => 81, 'prerequisite_id' => 76),
                array('subject_id' => 82, 'prerequisite_id' => 72),
                array('subject_id' => 82, 'prerequisite_id' => 73),
                /* BSCS 4th Year 2nd Semester */
                array('subject_id' => 84, 'prerequisite_id' => 65),
                array('subject_id' => 84, 'prerequisite_id' => 66),
                array('subject_id' => 84, 'prerequisite_id' => 67),
                array('subject_id' => 84, 'prerequisite_id' => 68),
                array('subject_id' => 84, 'prerequisite_id' => 69),
                array('subject_id' => 84, 'prerequisite_id' => 70),
                array('subject_id' => 84, 'prerequisite_id' => 71),
                array('subject_id' => 84, 'prerequisite_id' => 72),
                array('subject_id' => 84, 'prerequisite_id' => 73),
                array('subject_id' => 84, 'prerequisite_id' => 74),
                array('subject_id' => 84, 'prerequisite_id' => 75),
                array('subject_id' => 84, 'prerequisite_id' => 76),
                array('subject_id' => 85, 'prerequisite_id' => 66),
                array('subject_id' => 85, 'prerequisite_id' => 82),
                array('subject_id' => 86, 'prerequisite_id' => 80),
                array('subject_id' => 87, 'prerequisite_id' => 79),
                array('subject_id' => 87, 'prerequisite_id' => 80),
                array('subject_id' => 87, 'prerequisite_id' => 81),
                array('subject_id' => 88, 'prerequisite_id' => 65),
                array('subject_id' => 88, 'prerequisite_id' => 66),
                array('subject_id' => 88, 'prerequisite_id' => 67),
                array('subject_id' => 88, 'prerequisite_id' => 68),
                array('subject_id' => 88, 'prerequisite_id' => 69),
                array('subject_id' => 88, 'prerequisite_id' => 70),
                array('subject_id' => 88, 'prerequisite_id' => 71),
                array('subject_id' => 88, 'prerequisite_id' => 72),
                array('subject_id' => 88, 'prerequisite_id' => 73),
                array('subject_id' => 88, 'prerequisite_id' => 74),
                array('subject_id' => 88, 'prerequisite_id' => 75),
                array('subject_id' => 88, 'prerequisite_id' => 76),
                array('subject_id' => 54, 'prerequisite_id' => 35),
            )
        );
    }
}

class SubjectCorequisiteTableSeeder extends Seeder {

    public function run()
    {
        DB::table('subject_corequisite')->delete();

        DB::table('subject_corequisite')->insert(
            array(
                array('subject_id' => 62, 'corequisite_id' => 48),
                array('subject_id' => 65, 'prerequisite_id' => 69),
            )
        );
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(
            array(
                array('username' => 'bkintanar', 'password' => Hash::make('retardko'), 'active' => 1),
            )
        );
    }
}

class StudentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('students')->delete();

        DB::table('students')->insert(
            array(
                array('curriculum_id' => 2, 'user_id' => 1, 'standing' => 1, 'active' => 1),
            )
        );
    }
}

class EnrolledSubjectTableSeeder extends Seeder {

    public function run()
    {
        DB::table('enrolled_subjects')->delete();

        DB::table('enrolled_subjects')->insert(
            array(
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 0, 'subject_id' => 27),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 0, 'subject_id' => 32),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 58),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 28),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 33),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 38),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 39),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 36),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 40),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 44),
                array('student_id' => 1, 'school_year_id' => 1, 'semester_id' => 1, 'subject_id' => 89),
            )
        );
    }
}

class SchoolYearTableSeeder extends Seeder {

    public function run()
    {
        DB::table('school_years')->delete();

        DB::table('school_years')->insert(
            array(
                array('school_year' => '2013-2014', 'active' => 1),
                array('school_year' => '2014-2015', 'active' => 0),
            )
        );
    }
}

class ConfigTableSeeder extends Seeder {

    public function run()
    {
        DB::table('configs')->delete();

        DB::table('configs')->insert(
            array(
                array('name' => 'school_year', 'value' => '2013-2014'),
                array('name' => 'semester', 'value' => '1'),
            )
        );
    }
}
