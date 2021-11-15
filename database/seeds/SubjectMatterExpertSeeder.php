<?php

use Illuminate\Database\Seeder;
use App\Models\SubjectMatterExpert;

class SubjectMatterExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sme = [
            [
                'name' => 'Krish Naik',
                'designation' => 'Chief Innovation Officer at iNeuron',
                'about' => 'Krish Naik is the Chief Innovation Officer at iNeuron and has over eight years of industry experience. He runs his own YouTube channel, with around 278K subscribers, that explains various topics on machine learning, deep learning, and AI using real-world scenarios. Not only does he make step-by-step tutorials of these topics to apply them in real-world problems, but he also hosts Q&A sessions on his channel to address some of the complex questions of the field.',
                'mentorship' => "Machine Learning,Deep Learning,Artificial Intelligence",
                'display_picture' => 'https://yt3.ggpht.com/ytc/AKedOLS_aDNqDAZrbhNB8zdM0KTWkDyWdJ9F4IKp48LJhQ=s900-c-k-c0x00ffffff-no-rj'
            ],
            [
                'name' => 'Abhishek Thakur',
                'designation' => '4x Kaggle Grandmaster',
                'about' => 'A 4x Kaggle grandmaster, Abhishek Thakur makes videos about applied machine learning, deep learning and data science. Along with making walkthrough videos to learn the basics of programming for data science, his channel hosts tutorials with experts on complex topics like machine learning with PyCaret, machine learning APIs, CycleGANs among others.',
                'mentorship' => "Data Science,Basic Programming,CycleGANs,Machine Learning",
                'display_picture' => 'https://miro.medium.com/max/500/0*H1SEVSaV75cydTQ7'
            ],
            [
                'name' => 'Srivatsan Srinivasan',
                'designation' => 'Chief Data Scientist at Cognizant',
                'about' => 'With an industry experience of 17 years, Srivatsan Srinivasan, who is currently working as a Chief Data Scientist at Cognizant, posts everything about ‘data’. He covers an overview and implementation of topics on machine learning, artificial intelligence, data engineering, development operations, and cloud in his programming tutorials. Along with it, he also covers a lot of business use cases. One of his playlists is a ‘Machine Learning Bootcamp’ that hosts live tutorials in collaboration with DPhi, a data science community.',
                'mentorship' => "Artificial Intelligence,Data Engineering,Development Operations",
                'display_picture' => 'https://educlasses.co.in/wp-content/uploads/2021/01/srivatsan-srinivasan.jpg'
            ],
            [
                'name' => 'Kevin Markham',
                'designation' => 'Founder - Data School',
                'about' => 'Kevin Markham’s channel is perfect for users who are just getting started in data science and willing to develop a strong foundational base. His channel Data School, with 158K subscribers, focuses on topics that one ‘needs to master first’. These are in-depth, hands-on programming tutorials to understand the basics. He also has playlists that introduce you to machine learning. You can start with his tutorials irrespective of your educational background. ',
                'mentorship' => "Programming Tutorials, Machine Learning",
                'display_picture' => 'https://media-exp1.licdn.com/dms/image/C5603AQGw2UyjeldmZQ/profile-displayphoto-shrink_800_800/0/1516588538177?e=1642636800&v=beta&t=v_KQZQzygHTRLFH1Ux-cYKEUXpmPKyjYT3i1fz5xvLM'
            ],
            [
                'name' => 'Corey Schafer',
                'designation' => 'Youtuber',
                'about' => 'Corey Schafer’s channel focuses on creating tutorials and walkthroughs for software developers, programmers, and engineers. It covers topics for beginners as well as experienced professionals. For data science, he has a playlist dedicated for libraries in Python including Pandas and Matplotlib.',
                'mentorship' => "Python, Pandas, Matplotlib",
                'display_picture' => 'https://yt3.ggpht.com/ytc/AKedOLQueRwobBmtzfRtvuQ9GJx9FdWy50w0xdybHDBQ=s900-c-k-c0x00ffffff-no-rj'
            ]
        ];
        SubjectMatterExpert::insert($sme);
    }
}
