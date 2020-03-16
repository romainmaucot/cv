document.addEventListener('DOMContentLoaded', function(event){

    let correct = 0;
    let total = 0;
    let draggableElements;
    let droppableElements;

    const popins = document.getElementsByClassName('popin');
    const toggles = document.getElementsByClassName('toggle-pop');
    const togglesFairmont = document.getElementsByClassName('btn-localiser-fairmont');
    const game = document.getElementById("game");
    const places = document.getElementById('places');
    const fairmont = document.getElementById('fairmont');



    // create action for all toggle popin btn
    for(let i = 0 ; i < toggles.length ; i++){
        toggles[i].addEventListener('click', function(e){
            for(let i = 0 ; i < popins.length ; i++){
                popins[i].classList.add('hidden')
            }
            game.classList.remove('blur')
        })
    }

    for(let i = 0 ; i < togglesFairmont.length ; i++){
        togglesFairmont[i].addEventListener('click', function(e){
            for(let i = 0 ; i < popins.length ; i++){
                popins[i].classList.add('hidden')
            }
            for(let i = 0 ; i < 7 ; i++){
                //console.log(droppableElements[i].classList.contains("draggable"))
                if (droppableElements[i].classList.contains("dragged") === false && droppableElements[i].classList.contains("final") === false){
                    droppableElements[i].classList.add("hidden")
                }
            }
            game.classList.remove('blur')

            places.classList.add('hidden');
            fairmont.classList.remove('hidden')
        })
    }

    // init DOM
    function initGame() {
        draggableElements = document.querySelectorAll(".draggable");
        droppableElements = document.querySelectorAll(".droppable");

        draggableElements.forEach(elem => {
            elem.addEventListener("dragstart", dragStart)
        });

        droppableElements.forEach(elem => {
            elem.addEventListener("dragenter", dragEnter);
            elem.addEventListener("dragover", dragOver);
            elem.addEventListener("dragleave", dragLeave);
            elem.addEventListener("drop", drop);
        });
    }

    // create events
    function dragStart(event) {
        // debug
        //console.log(event);
        event.dataTransfer.setData("text", event.target.id)
    }
    function dragEnter(event) {
        // start test ie
        event.preventDefault();
        // end test ie

        if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
            event.target.classList.add("droppable-hover")
        }
    }
    function dragOver(event) {
        if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
            event.preventDefault()
        }
    }
    function dragLeave(event) {
        if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
            event.target.classList.remove("droppable-hover")
        }
    }
    function drop(event) {
        event.preventDefault();

        total = total + 1;

        //fix style
        event.target.classList.remove("droppable-hover");

        //compare
        const draggedId = event.dataTransfer.getData("text");
        const droppedId = event.target.id;
        const isCorrectMatching = draggedId === droppedId;
        //console.log(draggedId, droppedId, isCorrectMatching);
        //testing results
        if (isCorrectMatching) {
            //const for DOM elems
            const draggedElem = document.getElementById(draggedId);
            const old = document.getElementsByClassName('draggable');
            const popin = document.getElementById("popin-" + draggedId.toString());
            const game = document.getElementById("game");
            const form = document.getElementById('final-form');
            const img = document.getElementById('dnd-img');

            //console.log('fired elem id', "popin-" + draggedId.toString())

            //fix display
            event.target.classList.add("victory");
            draggedElem.classList.remove("draggable");
            draggedElem.removeAttribute("draggable");
            draggedElem.classList.add("dragged");
            //make DOM not draggable
            for( let i = 0 ; i < old.length ; i++){
                if (old[i].id === draggedId){
                    old[i].style.opacity = '0.3';
                    old[i].removeAttribute('draggable')
                }
            }
            //show modal for each places and final form
            if(draggedId == 99 && droppedId == 99){
                form.classList.remove('hidden');
                game.classList.add('blur')

            }else if(draggedId != 99 && droppedId != 99){
                // img.hidden = true;
                popin.classList.remove("hidden");
                game.classList.add("blur");
                correct = correct + 1;

                if (correct === 6){
                    // for(let i = 0 ; i < popins.length ; i++){
                    //     popins[i].classList.add('hidden')
                    // }
                    for(let i = 0 ; i < 7 ; i++){
                        console.log(droppableElements[i].classList.contains("draggable"))
                        if (droppableElements[i].classList.contains("dragged") === false && droppableElements[i].classList.contains("final") === false){
                            droppableElements[i].classList.add("hidden")
                        }
                    }
                    // game.classList.remove('blur')
                    places.classList.add('hidden');
                    fairmont.classList.remove('hidden')
                }

                if(correct >= 3 && correct < 6){
                    for (let i = 0 ; i < togglesFairmont.length ;i++){
                        if (i === draggedId - 1){
                            togglesFairmont[i].classList.remove('hidden')
                        }
                    }
                }else if(correct === 6){

                    const places = document.getElementById('places');
                    const fairmont = document.getElementById('fairmont');
                    toggles.classList.add('hidden');
                    togglesFairmont.classList.remove('hidden');
                    popin.classList.remove('hidden');
                    game.classList.add('blur');
                    places.classList.add('hidden');
                    fairmont.classList.remove('hidden')
                }
            }

           // console.log('total = ' + correct + '/' + total);

        }else{
            //do something
        }
    }

    // call method
    initGame();

});






