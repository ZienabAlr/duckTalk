const allstars = document.querySelectorAll('.star'); 
let current_rating =document.querySelector('.current-rating');
allstars.forEach((star, i)=>{

    star.onclick= function(e){
       let current_star_level= i + 1; 
       current_rating.innerText = `${current_star_level} /5`;
        allstars.forEach((star, j)=>{

            if(current_star_level >= j + 1){

                star.innerHTML ='&#9733';
            }else{

                star.innerHTML ='&#9734';
            }

                
            // e.preventDefault();
        })

   
    }

})
