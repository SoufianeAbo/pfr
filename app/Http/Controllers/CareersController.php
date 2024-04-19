<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index(): View
    {
        return view('careers');
    }

    public function jobOffer($career): View
    {
        switch ($career) {
            case 'artist':
                $positionSummary = "The Artist at Neoline Studios will be tasked with 
                spearheading the creative vision and artistic direction across various projects.
                This role involves conceptualizing and executing compelling visual designs, ensuring
                consistency and quality across all artistic assets. The Artist will collaborate closely
                with internal teams to bring characters, environments, and narratives to life, infusing
                each project with unique visual flair. They will also contribute to the development of new
                art styles and techniques, staying abreast of industry trends and pushing the boundaries of
                artistic innovation. Additionally, the Artist will be responsible for maintaining brand
                aesthetics, adhering to Neoline Studios' creative standards, and fostering a culture of
                artistic excellence within the team.";

                $essentialDuties = "
                Collaborate with the Creative Director to define strategic objectives and advance the artistic vision of Neoline Studios, contributing to overall creative growth and departmental goals.
                Demonstrate a deep passion and understanding of the art and entertainment industry, including trends, market insights, and emerging artistic techniques.
                Conduct comprehensive analyses of artistic trends and competitor landscapes on a regular basis, providing valuable insights and recommendations to inform creative decision-making.
                Effectively liaise with cross-functional teams, including art direction, marketing, legal, and finance, fostering clear communication and collaboration to ensure alignment with Neoline Studios' objectives.
                Compile and validate quarterly sales projections, collaborating with artists and stakeholders to verify revenue forecasts and support financial planning initiatives.
                Engage in proactive outreach to identify and cultivate relationships with potential artistic collaborators, leveraging market research and trend analysis to identify new opportunities for creative partnerships.
                Prepare and deliver compelling pitches and presentations to potential collaborators, showcasing Neoline Studios' artistic capabilities and unique value proposition.
                Participate in weekly cross-functional meetings to align artistic direction with product development, legal requirements, brand ownership, and marketing strategies, ensuring cohesive execution of creative initiatives.
                Attend trade shows and industry events as needed, representing Neoline Studios and networking with industry professionals to stay informed about artistic trends and opportunities for collaboration.";

                $qualifications = "
                Minimum of 3 years of experience in the arts, preferably within the video gaming, animation, or related entertainment industries, demonstrating a strong understanding of artistic processes and trends.
                Proficiency in reviewing artistic contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey artistic concepts and collaborate with diverse teams.
                Adaptability to thrive in a dynamic, fast-paced environment, managing multiple projects and workflows across different departments and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring timely delivery of high-quality artistic assets.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, facilitating effective collaboration and alignment with Neoline Studios' international objectives.";

                $educational = "
                Bachelor's degree in Fine Arts, Digital Arts, Animation, Visual Communication, or a related field, or equivalent practical experience in the arts and entertainment industry.
                Or relevant work experience";

                $salaryRange = "Salary Range: $64,528 - $90,096";
                break;
            default:
                $positionSummary = "not done lol";
                break;
        }

        return view('careersapply', compact('positionSummary', 'essentialDuties', 'qualifications', 'educational', 'salaryRange'));
    }
}
