//===========================Sidebar Acitve ================================
 $(document).ready(function(){
         // sidebar collapse
        $('.hamburger').click(function(){
            console.log("hello");
            $('.wrapper').toggleClass('active');
        })
        // sidebar collapse 

        // For mobile sidebar collpase
        $('.fa-bars').click(function(){
           $('.sidebar_menu').toggleClass('sidebar_active');
        });
        //submenu
        $('.c_btn').click(function(){
            $('.company_show').toggleClass('show');
            $('.first').toggleClass('rotate');
        });
        $('.s_btn').click(function(){
           $('.staff_show').toggleClass('show1');
           $('.second').toggleClass('rotate');
        });
        $('.v_btn').click(function(){
          $('.vehicle_show').toggleClass('show2');
          $('.third').addClass('rotate');
        });
        //submenu

        //add active class
        $('.sidebar_menu ul li').click(function(){
            $(this).addClass('active').siblings().removeClass('active');    
        });

        //open menu another menu hide
        $('.sidebar_menu ul li ').on('click', function(e) {
          $('ul .menu-item-has-children  ul').hide();

          if ($(e.target).parent().hasClass('menu-item-has-children')) {
            $(e.target).siblings('ul').toggle();
          }
        });

        
     });
//===========================Sidebar Acitve ================================



//=========================== Start custom tab ================================
var tabs = document.querySelectorAll(".tabs ul li");
var tabs_wrap = document.querySelectorAll(".tab-wrap");

tabs.forEach(function(tab, tab_index){
        
    tab.addEventListener('click',function(){

        tabs.forEach(function(tab){
            tab.classList.remove("active");
        })
        tab.classList.add("active");

        tabs_wrap.forEach(function(content, content_index){
    
            if (content_index == tab_index) {
                content.style.display="block";
            }
            else{
                content.style.display="none";
            }
        })
    })
})

//=========================== End custom tab ================================

// select box open/close toggle
for (const dropdown of document.querySelectorAll(".select-box-container")) {
    dropdown.addEventListener('click', function() {
        this.classList.toggle('open');
    })
}
// selected option
for (const option of document.querySelectorAll(".option")) {

    option.addEventListener('click', function() {
        if (!this.classList.contains('selected')) {

            for(const opt_selected of document.querySelectorAll('.option.selected')){
                opt_selected.classList.remove('selected');
            }

            this.classList.add('selected');
            this.closest('.select-box-container').querySelector('.selected-value span').innerHTML = this.textContent;
        }
    })
}
// close select box if click another place
window.addEventListener('click', function(e) {
    for (const select of document.querySelectorAll('.select-box-container')) {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }        
    }
});
//============================ End for custom select box ================================


// ==============  Start custom multi select box  =======================================

// select box open/close toggle
for (const multi_select of document.querySelectorAll(".multi-select-box-container")) {
    multi_select.addEventListener('click', function() {
        this.classList.toggle('open-select');
    })
}   
// selected multi option
for (const opt of document.querySelectorAll(".opt")) {
    var i=0;
    opt.addEventListener('click', function() {
        if (!this.classList.contains('selected')) {

            for(const option_selected of document.querySelectorAll('.opt.selected')){
                    option_selected.classList.remove('selected');
                }
            this.classList.add('selected');
            i+=1;
            this.closest('.multi-select-box-container').querySelector('.multi-selected-value').innerHTML += 
                                                        '<span class="selected-opt">'
                                                        + this.textContent
                                                        + '<i class="fas fa-times" id='+ i + ' onclick="del('+i+')"></i></span>' ;
        }
    });
}
//remove selected option 
function del(del_id)
{
    console.log("del test "+(del_id));
    var id = document.getElementById(del_id);
    id.parentNode.remove();
}
// close select box if click another place
window.addEventListener('click', function(e) {
    for (const multi_select of document.querySelectorAll('.multi-select-box-container')) {
        if (!multi_select.contains(e.target)) {
            multi_select.classList.remove('open-select');
        }        
    }
});
//=========================== End custom multi select box ================================

//=========================== Bar Chart ================================
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Report"
  },
  axisY: {
    
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    dataPoints: [      
      { y: 300878, label: "Company" },
      { y: 266455,  label: "Staff" },
      { y: 169709,  label: "Vehicle" },
      { y: 158400,  label: "Equipment" },
  
     
    ]
  }]
});
chart.render();

}


