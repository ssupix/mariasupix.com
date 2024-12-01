<pre><code class="language-html">
    const SpinningBowlSelector = ({ selectedBowl, bowls, circleColor }) => {
        // Calculate the angle of each bowl in the circle
        const bowlCount = bowls.length;
        const angle = 360 / bowlCount;
        const radius = 400;

        return (
            &lt;div className="
                relative 
                mx-auto 
                w-full h-full
                scale-1
                desktop:scale-150
            "&gt;
                {/* Background circle */}
                &lt;div 
                    className="
                        absolute 
                        top-1/2 left-1/2 
                        transform -translate-x-1/2 -translate-y-1/2
                        transition-colors duration-300 mix-blend-multiply"
                    style={{
                        width: `${radius * 2}px`,
                        height: `${radius * 2}px`,
                    }}
                &gt;
                    &lt;svg viewBox="0 0 100 100" className="w-full h-full"&gt;
                        &lt;circle cx="50" cy="50" r="50" className={`${circleColor} transition-colors duration-300`} /&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                
                {/* Render the bowls */}
                &lt;div 
                    className="
                        w-full h-full 
                        transition-transform duration-500 ease-in-out z-10"
                    style={{ transform: `rotate(${-selectedBowl * angle}deg)` }}
                &gt;
                    {bowls.map((bowl, index) => {
                        // Calculate the angle of each bowl
                        const bowlAngle = index * angle;
                        // Calculate the x and y coordinates of each bowl
                        const x = Math.sin((bowlAngle * Math.PI) / 180) * radius;
                        const y = -Math.cos((bowlAngle * Math.PI) / 180) * radius;
                        
                        return (
                            &lt;div
                                key={index}
                                className="
                                    absolute top-1/2 left-1/2 
                                    size-52 
                                    transition-all duration-300"
                                style={{
                                    // Move the bowl to the correct position in the circle
                                    transform: `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(${selectedBowl * angle}deg)`,
                                }}
                            &gt;
                                {/* Render the bowl image */}
                                &lt;img 
                                    src={bowl} 
                                    alt={`Smoothie Bowl ${index + 1}`} 
                                    className={`
                                        w-full h-full 
                                        object-cover 
                                        rounded-full 
                                        transition-all duration-300 
                                        ${index === selectedBowl ? 'scale-125 shadow-lg' : 'scale-100'}
                                    `}
                                /&gt;
                            &lt;/div&gt;
                        );
                    })}
                &lt;/div&gt;
            &lt;/div&gt;
        );
    };

</code></pre>