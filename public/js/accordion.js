let accordions = {
    elements: d.querySelectorAll('.accordion-title'),
    multiple: true,
    load(){
        if(window.screen.width >= 609){
            this.multiple = false;
            this.deploy(this.elements[0].parentNode);
        }
        for(let position = 0; position < this.elements.length; position++){
            this.elements[position].addEventListener('click', function(e){
                e.preventDefault();
                accordions.deploy(this.parentNode);
            });
        }
    }, deploy(accordion){
        if(!this.multiple){
            for(let position = 0; position < this.elements.length; position++){
                if(this.elements[position].parentNode != accordion){
                    this.elements[position].parentNode.classList.remove('accordion-focus');
                }
            }
        }
        if(!accordion.classList.contains('accordion-focus')){
            accordion.classList.add('accordion-focus');
        }else{
            accordion.classList.remove('accordion-focus');
        }
    }
};

d.addEventListener('DOMContentLoaded', function(){
    accordions.load();
});