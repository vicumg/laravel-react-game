import React, {useState} from 'react';

export interface IUser{
    name: string,
    age:number,
}

 const App = ()=> {
    const [users, setUser] = useState<IUser[]>([
        {
            name: "Viktor",
            age: 26,
        },
        {
            name: "Boris",
            age: 18
        }
    ]);

    return (
        <div className="container">
            <ul>
                {users.map((user: IUser) =>{
                    return (
                        <li key={user.name}>
                            {user.name} is {user.age} years old
                        </li>
                    )
                })}
            </ul>
        </div>
    );
}

export default App;
