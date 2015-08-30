<?php

use Illuminate\Database\Seeder;
use App\JobDescription;

class JobDescriptionTableSeeder extends Seeder {

  public function run()
  {
    DB::table('job_descriptions')->delete();

    JobDescription::create([
        'title' => '市场高级经理(筹道股权)',
        'city_id' => 1,
        'company_id' =>1,
        'degree_id'=> 3,
        'job_category_id'=> 5,
        'minsalary'=> 30,
        'maxsalary'=> 60,
        'workyears'=> 3,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'负责市场营销、公共关系传播计划的策划与执行',
        'requirement'=>'岗位职责：
1、根据公司的市场发展战略规划，进行公司公共关系、品牌、传播矩阵的搭建，根据市场需求和变化进行品牌策划；
2、熟悉各类媒体的内容策划与运作机制，善于策划热点事件，联合媒体及合作品牌，推广公司主营业务及整体品牌；
3、负责媒体关系的开拓与维护，建立并维护与媒体的沟通合作渠道，负责新闻、媒体广告、SNS软文的投放策略，树立良好的品牌形象，负责主导处理企业危机公关；
4、独立策划并带领公司对外的各项市场活动，如新闻发布会、投融资路演会、行业论坛、沙龙、展会等；
5、完成品牌部日常工作管理以及部门工作的组织推动。
任职要求：
1、5年以上知名企业市场、公关、品牌策划的实操经验，至少2年以上互联网或金融从业经验；
2、具备良好的市场推广意识，能够独立策划大型事件营销并主导活动执行；
3、熟悉最新的媒体运作方式，善于开发及整合媒体资源，具有广博的人脉关系和丰富的媒体资源积累，对社交媒体传播有充分的理解； 4、抗压力强、独立承担工作指标，有高度职业责任感及团队合作精神，良好的沟通协调能力，具备危机处理经验；
5、写作能力强，媒体行业工作经验者优先。'
    ]);
    
    JobDescription::create([
        'title' => 'VPN开发人员',
        'city_id' => 1,
        'company_id' =>1,
        'degree_id'=> 3,
        'job_category_id'=> 107,
        'minsalary'=> 25,
        'maxsalary'=> 50,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'1、参与公司VPN软件的开发与设计，包括Android VPN客户端底层、Linux服务端；
2、新应用C/C++语言和设计模式构建高性能、可扩展、稳健的产品；
3、负责初级员工技术指导和培训 。',
        'requirement'=>'1、计算机科学或相关专业领域的本科及以上学历，本科3年以上，研究生2年以上的Linux系统开发经验；
2、熟悉网络配置，包括：ARP查看、路由表查看、VLAN、NAT、静态路由、策略路由等基本配置；
3、熟悉OSI模型，精通TCP/IP协议（包括IP分包、UDP、DNS协议、TCP等）；
4、对Linux 系统有深入了解，精通Linux/Unix下的C/C++ 开发；
5、精通linux下应用程序调试，精通GDB使用；
6、熟悉PKI体系，熟悉SSL协议，精通SSL协商过程及各种加解密算法。'
    ]);
    
    JobDescription::create([
        'title' => 'Android系统安全研究员',
        'city_id' => 1,
        'company_id' =>1,
        'degree_id'=> 3,
        'job_category_id'=> 105,
        'minsalary'=> 25,
        'maxsalary'=> 50,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'1、负责安卓游戏/应用的加解密和数据传输分析、拆解、逆向等工作；
2、负责安卓游戏/应用破解注入相关功能研发工作。',
        'requirement'=>'1、熟悉android应用软件/游戏软件等逆向静态分析、动态调试、代码跟踪等；
2、熟悉Dex字节码格式， APK文件格式、结构与Dex加载流程，了解Dex逆向原理；
3、熟悉Android安全机制，了解打包、反编译、破解流程；
4、对逆向有强烈热情和爱好者，可适当放宽要求。
加分项：
1.了解Android root原理有漏洞发觉和攻击经验；
2.熟练使用IDA，并能编写插件；
3.对apk加固有一定了解，并能手工脱壳。'
    ]);
    
    JobDescription::create([
        'title' => 'Senior Application Engineer – Java & Linux',
        'city_id' => 1,
        'company_id' =>2,
        'degree_id'=> 3,
        'job_category_id'=> 105,
        'minsalary'=> 25,
        'maxsalary'=> 50,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'• Driving build and operational requirements for release and integration into the Cloud
• Working cross functionality to build and develop new products, tools and technologies geared toward the success of the Cloud
• Collaborate with release and engineering teams to ensure requirements and enhancement goals are met for Operations
• Participate in Capacity Planning and ensure scalability of the Cloud environment
• Drive performance issues out of Operations, in collaboration with various internal organizations.
• Work on developing solutions to SAP software and operational environments.
• Work with and lead swat teams to troubleshoot, debug and deploy SAP software applications, modifications, customizations, and datacenter software as part of the issue identification and resolution process, owning the problem end to end.
• Identify and correct issues that have resulted from integrations, customizations, and migrations.
• Train junior operations engineers to problem solve and manage the assigned software in the SAP Cloud.
• Work with and enhance tools, operational processes and knowledge centers to ensure smooth and consistent operations.',
        'requirement'=>'• Masters’s Degree in a Computer Science or related field + 1 Year of Experience or Bachelors Degree in Computer Science or related field + 3 years of equivalent professional experience in Java/J2EE based server-side application developing, troubleshooting, and supporting an enterprise application
• Must have a strong understanding of the Unix/LINUX operating system
• Understands the principles of Object Oriented Design and Design Patterns
• Solid understanding of Java, J2EE, Spring, Struts, JSPs, Servlets and XML.
• Understands database (Oracle database preferred), SQL, PL/SQL
• Understands front-end technologies including HTML, DHTML, CSS and JavaScript
• Knowledge of major J2EE servlet container or application servers: Tomcat, Jboss, Weblogic and Web Servers
• Familiarity with various Integrated Development Environments (IDE), such as Eclipse
• Must have a good understanding of the Unix/LINUX operating system
• Knowledge of JEE deployment process and the ability to build applications using automated tools like Apache Ant, Maven etc is a plus.
• Knowledge of Flex is a plus.
• Strong interpersonal, communication and writing skills
• Ability to handle multiple projects simultaneously, meet deadlines, while effectively managing priorities and communicating progress
• Must be able to obtain a government public trust security clearance'
    ]);
    
    JobDescription::create([
        'title' => 'Senior Web Front-end Developer',
        'city_id' => 1,
        'company_id' =>2,
        'degree_id'=> 3,
        'job_category_id'=> 103,
        'minsalary'=> 25,
        'maxsalary'=> 40,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'Work with a team to develop rich user interfaces for enterprise-class SaaS applications.
Developing Web 2.0 interfaces utilizing XHTML, CSS, object-oriented JavaScript, and AJAX.
Write quality, testable, maintainable, and well-documented code.
Drive for consistent user interaction by consolidating on common reusable components.
Work directly with product management and the user experience group to help determine and solve the customer needs through our products.',
        'requirement'=>'Bachelor’s degree in Computer Science, Engineering (any type), or a related field.
3 to 5 years of experience with programming user interfaces for Web-based software applications.
Proficiency with XHTML, CSS, object-oriented JavaScript, and AJAX.
Experience using an open-source AJAX/DHTML framework.
Familiarity with W3C standards, Web accessibility / Section 508, and cross-browser compatibility issues.
Experience in J2EE preferred, but not required.
Skills:
Hands-on experience in full software development cycle.
Professional skills: ability to work independently and with a team.
Good communication skill and be fluent in English.
Able to understand and master new technologies quickly.
Strong focus on quality and attention to detail.
Able to quickly understand and solve unique and undocumented programming problems.
Strong desire to learn new technologies.
Must be passionate about developing cool interfaces and self-starting.'
    ]);
    
    
    JobDescription::create([
        'title' => 'Mobile Development Manager',
        'city_id' => 1,
        'company_id' =>2,
        'degree_id'=> 3,
        'job_category_id'=> 104,
        'minsalary'=> 25,
        'maxsalary'=> 40,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'SuccessFactors is seeking an Engineering Manager to lead our Mobile team that will be responsible for our product development. This team will be one of 3 Global Development teams that is responsible for SuccessFactors Mobile engagement for iOS, Android, Blackberry and windows phones and tablets.',
        'requirement'=>'– Management of design and implementation of all product components
– Oversee development teams, maintain project schedules, and assign engineering tasks following SCRUM and Agile methodologies.
– Drive application architecture and participate in design review
– Foster the professional growth of the teams in a fast-paced team environment
Partner with product management to develop new product delivery
– Participate in the Mobile Technical leadership group.
– Handle customer escalation, help prioritize initiative align with business goal, ensuring optimal resources allocation to maximize the impact of all development efforts
– Help define, track, and enhance team productivity metric, drive for performance
– Assist other teams such as network operations and customer support, as needed
– The Manager will need to work effectively with other members of senior management and be a trusted partner
– Possess strong interpersonal skills, excellent communication skills, and a facility and ease with large group presentations will be needed
Required Experience and Skills:
– Extensive experience developing mobile applications for IOS and Android
– Proven track record of working with teams in US and Europe.
– Proven track record of brining both IOS and Android apps to market
– Experience in developing one app for both iPhone and iPad.
– Plus if experience with Ruby on Rails
– 5 years formal hands-on technical management
– Knowledge of Objective C, Android
– Extensive knowledge on architecture and design Mobile components
– Extensive knowledge on how to document and present new architectural thoughts
– Excellent hands-on design, implementation and communication skills
– Degree in Computer Science, advance degree is plus.'
  ]);
        JobDescription::create([
        'title' => 'Development Manager',
        'city_id' => 1,
        'company_id' =>2,
        'degree_id'=> 3,
        'job_category_id'=> 103,
        'minsalary'=> 25,
        'maxsalary'=> 40,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'Responsible for management and advancement of individuals and teams.
Responsible for building a high performing team concerning engineering and social aspects. This includes hiring the best
people from within / outside the company, fostering motivation and integration of employees as well as team learning and
development. Actively addresses and resolves team issues.',
        'requirement'=>'– Sets clear goals with team members, inspires and supports them towards accomplishing these goals and evaluates goal achievement in a fair and understandable way.
– Creates an environment of continuous learning and improvement. Actively seeks to coach and help with personal development.
– Regularly offers feedback in an effort to help others develop. Supports others in setting challenging development goals.
– Supports cross topics outside of his/her management scope.
– Drives and actively participates in the Continuous Improvement Process (CIP).
– Actively drives Customer Collaboration aligned with PO.
– Contributes as a management stakeholder to long-living, maintainable, high quality components that can easily be integrated to a product
For non-LEAN contexts:
– Proactively acts to understand business needs and offer solutions that align across business units; responsible for the vision of teams; strategic understanding of how the group’s echnology contribute to the product strategy.
– Builds action plans and makes operational decisions on policies, tactics, and resources critical to the function’s business success to ensure delivery against strategy of the function or team.
– Ensures strategy roll-out into own team/organization.
Additional Information
– As a people manager, you are responsible for supporting the success of not only your direct reports, but the success of all employees within the larger team you are a part by helping to identify development opportunities and supporting team members to achieve their goals. You are expected to know about the members of your extended team and share insights with your peer managers.
– Look for opportunities to coach and recognize employees directly and provide just-in-time feedback so that employees can reflect on your input immediately.
WORK EXPERIENCE
– Software development expertise
EDUCATION AND QUALIFICATION / SKILLS AND COMPETENCIES
– Business English: fluent
– Bachelor or Master degree or equivalent education'
    ]);
        
    JobDescription::create([
        'title' => 'Application Development Manager',
        'city_id' => 1,
        'company_id' =>3,
        'degree_id'=> 3,
        'job_category_id'=> 103,
        'minsalary'=> 25,
        'maxsalary'=> 40,
        'workyears'=> 6,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'-Lead a development team, around 10 to 20 people, to deliver frond end (Java, HTML5, Flex, Webservice) project
- Need to management project, project plan, execution, report etc,
- Need to manage resource, goal setting, performance management, motivation etc',
        'requirement'=>'- 6 to 10 years project delivery experience
- Good communication skill in English
- Good tech in front end world, Agile process,
- 3 to 5 years Project management and team lead experience'
    ]);
    
    JobDescription::create([
        'title' => 'Application Development Manager',
        'city_id' => 1,
        'company_id' =>3,
        'degree_id'=> 3,
        'job_category_id'=> 103,
        'minsalary'=> 25,
        'maxsalary'=> 40,
        'workyears'=> 2,
        'agestart'=>25,
        'ageend'=>40,
        'responsibility'=>'',
        'requirement'=>''
    ]);
        
  }

}
