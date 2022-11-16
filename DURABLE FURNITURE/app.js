const http=require('http');
const fs=require('fs');
const serve=http.createServer((req ,res)=>{
   if(req.url == "/index"){
    fs.readFile("./index.html", (err,data)=>{
      res.writeHead(200,{'Content-Type':'text/html'})
      res.write(data)
      res.end()
    })
  
   }
   else{
    res.write("hello world")
    res.end()
   }
   
});
serve.listen(9000,()=>{
  console.log("server is running")
})
    
    
