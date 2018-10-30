export function createDemo(){
 
    return {
        //request options 	
        request:{
            //post url
            url:'/register',
            //method
            method:'post',
            //adding the CSRF Token for laravel applications
            // headers:new Headers({
            //     'X-CSRF-TOKEN':window.Laraval.csrfToken
            // }),
            //include credentials
            credentials:'include'
        },
        //title
        title:'Demo Form',
        //text of the submit button
        submitText:'Register',
        //inputs
        inputs:[
            {
                type:'text',
                label:'Firtsname',
                name:'firstname',
                class:'form-control',
                value:''
            },
            {
                type:'text',
                label:'Lastname',
                name:'lastname',
                class:'form-control',
                value:''
            },
            {
                type:'email',
                label:'Email',
                name:'email',
                class:'form-control',
                value:''
            },
            {
                type:'password',
                label:'Password',
                name:'password',
                class:'form-control',
                value:''
            },
            {
                type:'password',
                label:'Confirm password',
                name:'password_confirmation',
                class:'form-control',
                value:''
            },
            {
                type:'date',
                label:'Date of birth',
                name:'dateofbirth',
                class:'form-control',
                value:''
            },
            {
                type:'tel',
                label:'Telephone',
                name:'phone',
                class:'form-control',
                value:''
            },
            {
                type:'select',
                label:'Gender',
                name:'gender',
                class:'form-control',
                options:['male','female'],
                value:""
            },
 
        ]
    }
}