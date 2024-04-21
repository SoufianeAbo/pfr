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
                $title = "Artist";

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
                Attend trade shows and industry events as needed, representing Neoline Studios and networking with industry professionals to stay informed about artistic trends and opportunities for collaboration";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in the arts, preferably within the video gaming, animation, or related entertainment industries, demonstrating a strong understanding of artistic processes and trends.
                Proficiency in reviewing artistic contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey artistic concepts and collaborate with diverse teams.
                Adaptability to thrive in a dynamic, fast-paced environment, managing multiple projects and workflows across different departments and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring timely delivery of high-quality artistic assets.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, facilitating effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor's degree in Fine Arts, Digital Arts, Animation, Visual Communication, or a related field, or equivalent practical experience in the arts and entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $90,096";
                break;
            case 'voiceactor':
                $title = "Voice Actor";

                $positionSummary = "
                The Voice Actor at Neoline Studios will be entrusted with embodying characters and narratives with authenticity and emotion, leveraging their vocal talents to breathe life into diverse
                roles across various projects. This pivotal role involves interpreting scripts and character descriptions to deliver compelling performances that resonate with audiences.
                The Voice Actor will collaborate closely with directors and production teams, ensuring alignment with the creative vision while bringing a distinctive voice to each character.
                They will continuously refine their craft, exploring nuances of tone, accent, and delivery to enhance character depth and believability. Additionally,
                the Voice Actor will uphold Neoline Studios' standards of excellence in vocal performance, contributing to the immersive storytelling experience and maintaining
                consistency with brand expectations. Their dedication to artistic expression and commitment to character authenticity will enrich Neoline Studios' projects
                and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'storydesigner':
                $title = "Story Designer";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'proofreader':
                $title = "Proof Reader";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'storydesigner':
                $title = "Story Designer";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'gamedesigner':
                $title = "Game Designer";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'projectdesigner':
                $title = "Project Designer";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
            case 'producer':
                $title = "Producer";

                $positionSummary = "
                The Story Designer at Neoline Studios will play a crucial role in crafting immersive narratives and captivating storylines that resonate with players. 
                Entrusted with shaping the creative direction of various projects, this pivotal role involves conceptualizing and developing compelling story arcs, character motivations,
                and dialogue that enrich the gaming experience. The Story Designer will collaborate closely with directors, writers, and development teams, ensuring alignment with the
                studio's creative vision while infusing each narrative with depth and authenticity. They will continuously refine their storytelling skills, exploring thematic
                elements, pacing, and player engagement to create memorable and impactful experiences. Additionally, the Story Designer will uphold Neoline Studios' standards of
                excellence in storytelling, contributing to the studio's reputation for immersive and emotionally resonant gameplay. Their dedication to crafting compelling narratives and 
                commitment to pushing the boundaries of interactive storytelling will elevate Neoline Studios' projects and captivate audiences worldwide.";

                $essentialDuties = "Collaborate closely with the Creative Director to align on strategic objectives and contribute to the overall artistic vision and growth of Neoline Studios.
                Maintain a deep understanding and keen interest in the entertainment industry, particularly voice acting trends, emerging technologies, and audience preferences.
                Regularly analyze the landscape of voice acting talent, identifying trends and insights to inform creative decision-making and enhance Neoline Studios' offerings.
                Effectively communicate and collaborate with cross-functional teams, including directors, writers, producers, and technical staff, to ensure alignment with Neoline Studios' creative objectives.
                Compile and validate projections for voice acting projects, collaborating with stakeholders to ensure accurate forecasts and support financial planning efforts.
                Participate in the recruitment of new voice acting talent, contributing to ideation sessions, identifying business opportunities, and conducting market analysis to attract top talent.
                Proactively seek out new opportunities for voice acting partnerships, crafting compelling pitches and presentations, and preparing sales materials to showcase Neoline Studios' capabilities.
                Participate in weekly cross-functional meetings to align voice acting direction with project development, legal requirements, branding strategies, and marketing initiatives.
                Travel up to 25% of the time to attend trade shows, industry events, and networking opportunities to stay informed about voice acting trends and cultivate industry relationships";

                $essentialDutiesArray = explode(".", $essentialDuties);

                $qualifications = "
                Minimum of 3 years of experience in voice acting, preferably within the entertainment industry, with a focus on video gaming, animation, or related fields, demonstrating a strong understanding of vocal performance techniques and industry trends.
                Proficiency in reviewing voice acting contracts and adeptness in negotiating key terms to ensure alignment with creative objectives and business goals.
                Excellent communication and presentation skills, with the ability to effectively convey character emotions and story narratives, collaborating seamlessly with directors, writers, and production teams.
                Adaptability to excel in a dynamic, fast-paced environment, managing multiple roles and projects across different studios and locations.
                Demonstrated ability to multitask and streamline processes to enhance efficiency in project-oriented tasks, ensuring the timely delivery of high-quality vocal performances.
                Intercultural knowledge and understanding of both Japanese and US-based markets is advantageous, fostering effective collaboration and alignment with Neoline Studios' international objectives";

                $qualificationsArray = explode(".", $qualifications);

                $educational = "
                Bachelor’s degree in Performing Arts, Theater, Communication, Broadcasting, or a related field, or equivalent practical experience in voice acting and the entertainment industry.
                Or relevant work experience";

                $educationalArray = explode(".", $educational);

                $salaryRange = "Salary Range: $64,528 - $120,096";
                break;
        }

        return view('careersapply', compact('title', 'positionSummary', 'essentialDutiesArray', 'qualificationsArray', 'educationalArray', 'salaryRange'));
    }
}
