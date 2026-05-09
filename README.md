# Projet for my portfolio: Local Services Directory

## Project Title:

OstroFind - Local Services Directory Site

## Table of contents

- [Project overview](#project-overview)
- [Goals & requirements](#goals--requirements)
- [Tech stack](#tech-stack)
- [My process and approach](#my-process-and-approach)
- [Challenges](#challenges)
- [Results and outcome](#results-and-outcome)
- [What I would do differently](#what-i-would-do-differently)

## Project overview:

I designed this site for local homeowners to find local service companies for home maintenance and repairs. Users can filter companies based on location and/or services. This site uses Advanced Custom Fields to list companies and their information. PHP templates manage and display this information dynamically.

## Goals & requirements:

Custom structure built with ACF, information showed clearly. A page for all the listings, a template for a single listing and a single category. A filter system to filter the listings.

## Tech stack:

- Astra-theme
- ACF and Search & Filter plugins
- PHP-templates
- Local

# My process and approach:

I started with researching what information is listed on similar sites. Then I designed the data structure for ACF based on that. I took my time to make sure the data structure was clean and got every key information. For this project, I decided to make two taxonomies: services and location.

When the ACF fields were ready, I set up my environment: downloaded the theme and plugins. First I set up the advanced custom fields, taxonomies and custom post type for the listings. This time this was really straight forward, thanks for prior planning and the previous portfolio project.

Next, I created the dummy data for the listings. I made five imaginary companies, added their information and looked up placeholder images. When I had my imaginary companies listed, I moved on to the templates. I started with the archive because it was one of the main templates needed for this project. I structured the layout similar to the portfolio-site project, so I copied the previous portfolio archive template code. Then I modified the code for this project. I also needed a single and two taxonomy templates. For those templates I copy-pasted the archive template code and then modified as needed. I styled templates minimally and aimed for a clean and simple look.

Finally I added the filter plugin. For that I downloaded a plugin and made a sidebar template for the filter. Filter plugin worked with shortcode. The documentation was clear and with some trial and error methods was all it took to achieve a clean result suitable for this project.

## Challenges:

- Problem 1: The listing page showed the wrong image. I had two images in the ACF (featured image and image), I had problems with the featured image. Because it is a basic WordPress feature, I needed a different hook for it. With WordPress developers guide and Google, I managed to find the correct hook.
- Problem 2: Sidebar template. First it didn’t show up on the page. Eventually I asked AI for help. I needed to modify the page layout via admin tools and then add a hook in the template. Also the Search & Filter plugin which I ended up using, didn’t have all the features I wanted for free. But I thought that for this project it is good enough.
- Problem 3: To show all the service category links below the listing. I am proud that I thought of adding multiple services to some companies. The first version showed only one service category link, the second version showed the first service as many times there were services linked for the company. Finally, the third version showed all the added service category links for the company. I was pleased to debug this all on my own.

## Results and outcome

![](/screenshots/archive-template.png)
Archive-template on site.
![](/screenshots/single-template.png)
Single-template on site.
![](/screenshots/editor.png)
Advanced custom fiels in the editor view.

## What I would do differently:

I would take more time for naming classes and ID:s for the CSS styling. I have some logic with the names, but I would see that with even more time and experience, the naming could be even better.
I also would approach the sidebar template differently now when I know how it works. I would build it before the single template and would think more about the styling.
