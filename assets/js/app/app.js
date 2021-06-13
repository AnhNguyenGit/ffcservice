"use strict";

const app = angular.module('ffcExpertApp',[]);
app.controller('ffcExpertCtrl', function($http){   
    var vm = this;
    vm.lang = 'en';
    vm.experts =[];
    vm.loadExperts = loadExperts;
    vm.items = []
    loadExperts();  
    //private function
    function loadExperts(){
        $http.get("admin/storage/expert.json").then(res=>{

           
            vm.experts = res.data.map(item =>{
               
                let temp   = {...item};
                temp.fullName = item.fullName[vm.lang];
                temp.countryName = item.countryName[vm.lang];
                temp.experiences= item.experiences.map(x=>
                    {
                        return {
                            code: x.code,
                            content: x.content[vm.lang],
                            group: x.group,
                            classes: x.classes
                        }
                    }

                );
                temp.educations = item.educations.map(x=>{
                    return{
                        code: x.code,
                            content: x.content[vm.lang],
                            group: x.group,
                            classes: x.classes
                    }
                });
                

            return temp;
        });         
        })
    }
    
    
});



