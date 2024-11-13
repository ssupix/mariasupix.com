async function loadProjects() {
    const response = await fetch('./data/projects.json');
    const projects = await response.json();
    const projectContainer = document.getElementById('project-container');

    projects.forEach(project => {
        const card = document.createElement('div');
        card.classList.add('card', 'col-12', 'col-6-md', 'hover-content');
        card.setAttribute('onclick', `window.location.href='${project.url}'`);
        card.setAttribute('data-category', project.category);
        card.setAttribute('data-hover-text', 'View project');

        const cover = document.createElement('div');
        cover.classList.add('cover');

        if (project.video) {
            const video = document.createElement('video');
            video.muted = true;
            video.loop = true;
            video.playsInline = true;
            video.autoplay = true;
            video.setAttribute('poster', project.poster);
            
            const source = document.createElement('source');
            source.src = project.video;
            source.type = 'video/mp4';
            
            // Add error handling
            source.onerror = () => {
                console.error(`Error loading video: ${project.video}`);
                // Fallback to poster image
                const fallbackImg = document.createElement('img');
                fallbackImg.src = project.poster;
                fallbackImg.alt = `${project.title} Poster`;
                video.replaceWith(fallbackImg);
            };

            video.appendChild(source);
            cover.appendChild(video);

            // Start playing immediately after load
            video.addEventListener('loadeddata', () => {
                const playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.catch(error => {
                        console.error("Video autoplay failed:", error);
                    });
                }
            });

        } else {
            const img = document.createElement('img');
            img.src = project.poster;
            img.alt = `${project.title} Poster`;
            cover.appendChild(img);
        }

        card.appendChild(cover);

        const description = document.createElement('div');
        description.classList.add('description');
        
        const title = document.createElement('h4');
        title.textContent = project.title;
        
        const desc = document.createElement('p');
        desc.textContent = project.description;
        
        description.appendChild(title);
        description.appendChild(desc);

        const arrow = document.createElement('div');
        arrow.classList.add('cta');
        arrow.innerHTML = '→'; 
        desc.appendChild(arrow);

        const tagsContainer = document.createElement('div');
        tagsContainer.classList.add('tags');
        project.tags.forEach(tag => {
            const tagElement = document.createElement('div');
            tagElement.classList.add('pill-' + tag.color);
            tagElement.textContent = tag.name;
            tagsContainer.appendChild(tagElement);
        });
        
        description.appendChild(tagsContainer);
        card.appendChild(description);
        projectContainer.appendChild(card);
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', loadProjects);