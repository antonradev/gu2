gu2
===



Gamificated Users

http://gu.uxpd.net/

What is it?

Gamificated Users is a very simple project with the powerful idea to give the users a development of their profiles with the power of the gamification. It is a training. I built it to practice my basic PHP programing skills but the idea remains great.

What does it do?

Users have experience (XP) and its encrising depending on the time and the following users actions:

Visiting project pages
Refreshing pages
Activating VIP Membership
Leveling XP unlocks parts of the project. With achieving higher level, users have access to functionalities and sections.

XP in Gamificated Users is usefull

Amounts of XP can be used for ordering features. XP is not only a counting number.

How does it work?

Congratulations! Your XP is enough to see this!

Basics of the XP calculation: DATETIME value from the database is converted to time string. Current time minus Registered time gives a constantly increasing number (User living time) which is included in the total XP. Clicks and Pages views sum is added to the User living time.

Clicks increase XP. For every 10 clicks in the project pages that have marker, an amount of XP is added to the total XP number and Clicks are reset to zero. 20 Refreshes gives +1 to the Mastered Pages Views in the database.

Clicks and Mastered Pages Views are stored in the database while Refreshes (Pages views in session) are stored temporary in the browser session.

Big enough XP number includes contents files in the sidebar.

Anton Radev
http://antonradev.com
http://uxpd.net
More projects: http://jui.uxpd.net/
http://linkedin.com/in/antonradev
