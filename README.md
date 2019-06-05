# rating-system

### Implementation of [Elo's rating algorithm](https://en.wikipedia.org/wiki/Elo_rating_system) in PHP.

>The final rating is based on the current scores(win or loss) of A and B, and the one with highest current rating loses more points to the other when lost,than he could gain if wins.same the other way.


for example,

**Current Rating of A = 2000**

**Current Rating of B = 1700**

so,
#### If A Wins :
**Final Rating of A --> 2004.8313458308 (Gains 5 points from B)**

**Final Rating of B --> 1695.1686541692 (Loses 4 points to A)**

and
#### If B Wins :
**Final Rating of A --> 1972.8313458308 (Loses 27 points to B)**

**Final Rating of B --> 1727.1686541692 (Gains 28 points from A)**
