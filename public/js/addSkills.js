let addSkillbtn = document.querySelector("#addSkills");
let addSubSkillbtn = document.querySelector("#addSubSkills");

let Skilldiv = document.querySelector(".skills");
let SubSkilldiv = document.querySelector(".subSkills");

let SkillText = document.querySelector("#SkillText");
let SubSkillText = document.querySelector("#SubSkillText");

addSkillbtn.addEventListener("click", ()=>{
    let skill = document.createElement('div');
    skill.classList.add('col-1');
    skill.innerHTML = 
    ` 

        <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off" name="skills[]" value=${SkillText.value}>
        <label class="btn btn-primary" for="btn-check-2">${SkillText.value}</label>

    `;

    // Append the child element to the parent
    Skilldiv.appendChild(skill);
});

addSubSkillbtn.addEventListener("click", ()=>{
    let subskill = document.createElement('div');
    subskill.classList.add('col-1');
    subskill.innerHTML = 
    ` 

        <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off" name="subSkills[]" value=${SubSkillText.value}>
        <label class="btn btn-primary" for="btn-check-2">${SubSkillText.value}</label>

    `;

    // Append the child element to the parent
    SubSkilldiv.appendChild(subskill);
});