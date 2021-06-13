"use strict";

const app = angular.module('ffcExpertApp',[]);
app.controller('ffcExpertCtrl', function($http,appConfig){  
    const serviceUrl = appConfig.serviceUrl
    var vm = this;
    vm.lang = 'vi';
    vm.experts =[];
    vm.loadExperts = loadExperts;
    vm.isUrl = isUrl;
    vm.items = []
    loadExperts();  
    //private function
    function loadExperts(){
        $http.get(serviceUrl+"/admin/storage/expert.json").then(res=>{

           
            vm.experts = res.data.map(item =>{
               
                let temp   = {...item};
                temp.fullName = item.fullName[vm.lang];
                temp.countryName = item.countryName[vm.lang];
                temp.picture = verifyLink(item.picture);
                temp.countryFlag = verifyLink(item.countryFlag);
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

    function isUrl(link){
        return link.starsWith('http://') || link.starstWith('https://');
    }

    function verifyLink(link){
        if( link.startsWith('http://') || link.startsWith('https://'))
            return link;
        else
            return appConfig.serviceUrl+link;
    }
    
    
});



