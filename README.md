## Inspiration
Lectures all around the world last on average 100.68 minutes. That number goes all the way up to 216.86 minutes for art students. As students in engineering, we spend roughly 480 hours a day listening to lectures. Add an additional 480 minutes for homework (we're told to study an hour for every hour in a lecture), 120 minutes for personal breaks, 45 minutes for hygeine, not to mention tutorials, office hours, and et. cetera. Thinking about this reminded us of the triangle of sleep, grades and a social life-- and how you can only pick two. We felt that this was unfair and that there had to be a way around this. Most people approach this by attending lectures at home. But often, they just put lectures at 2x speed, or skip sections altogether. This isn't an efficient approach to studying in the slightest.

## What it does
Our web-based application takes audio files- whether it be from lectures, interviews or your favourite podcast, and takes out all the silent bits-- the parts you don't care about. That is, the intermediate walking, writing, thinking, pausing or any waiting that happens. By analyzing the waveforms, we can algorithmically select and remove parts of the audio that are quieter than the rest. This is done over our python script running behind our UI.

## How I built it

We used PHP/HTML/CSS with Bootstrap to generate the frontend, hosted on a DigitalOcean LAMP droplet with a namecheap domain. On the droplet, we have hosted an Ubuntu web server, which hosts our python file which gets run on the shell.

## Challenges I ran into
For all members in the team, it was our first time approaching all of our tasks. Going head on into something we don't know about, in a timed and stressful situation such as a hackathon was really challenging, and something we were very glad that we persevered through.

## Accomplishments that I'm proud of
Creating a final product from scratch, without the use of templates or too much guidance from tutorials is pretty rewarding. Often in the web development process, templates and guides are used to help someone learn. However, we developed all of the scripting and the UI ourselves as a team. We even went so far as to design the icons and artwork ourselves.

## What I learned
We learnt a lot about the importance of working collaboratively to create a full-stack project. Each individual in the team was assigned a different compartment of the project-- from web deployment, to scripting, to graphic design and user interface. Each role was vastly different from the next and it took a whole team to pull this together. We all gained a greater understanding of the work that goes on in large tech companies.

## What's next for lectr.me
Ideally, we'd like to develop the idea to have much more features-- perhaps introducing video, and other options. This idea was really a starting point and there's so much potential for it.

## Examples
https://drive.google.com/drive/folders/1eUm0j95Im7Uh5GG4HwLQXreF0Lzu1TNi?usp=sharing

Hosted on : http://lectr.me/
