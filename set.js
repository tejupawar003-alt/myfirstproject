//const app = express();
//app.use(cors());
//app.use(express.json());




mongoose.connect("mongodb://localhost:27017/productDb")
.then(()=> console.log("Connect successfully to mongoDb"))
.catch(err => console.log ("Connection Error",err));

