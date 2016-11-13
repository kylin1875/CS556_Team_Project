//
//  PopUpViewController.swift
//  Project
//
//  Created by Zhiwei Zheng on 11/12/16.
//  Copyright © 2016 Zhiwei Zheng 10635. All rights reserved.
//


import UIKit

class PopUpViewController: UIViewController {
    
    override func viewDidLoad() {
        super.viewDidLoad() //show selected view to the screen
        self.showAnimate()
        // Do any additional setup after loading the view.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
    //remove the view from screen
    @IBAction func ClosePopUp(_ sender: AnyObject) {
        self.removeAnimate()
        //self.view.removeFromSuperview()
    }
    
    //Animation
    func showAnimate(){
        //Make the view bigger first
        self.view.transform = CGAffineTransform(scaleX: 1.3, y: 1.3);
        //Transparency
        self.view.alpha = 0.0;
        //animate the view, scale down to normal in 0.25S
        UIView.animate(withDuration: 0.25, animations: {
            self.view.alpha=1.0
            self.view.transform = CGAffineTransform(scaleX: 1, y: 1);
        })
    }
    
    func removeAnimate(){
        //animate the view from smaller to bigger(1 to 1.3) as exitting the screen
        UIView.animate(withDuration: 0.25, animations: {
            self.view.transform = CGAffineTransform(scaleX: 1.3, y: 1.3);
            self.view.alpha=0.0
            },completion:{(finished:Bool) in
                if(finished)
                {
                    //once Animation finish, remove it.
                    self.view.removeFromSuperview()
                }
        })
    }
    /*
     // MARK: - Navigation
     
     // In a storyboard-based application, you will often want to do a little preparation before navigation
     override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
     // Get the new view controller using segue.destinationViewController.
     // Pass the selected object to the new view controller.
     }
     */
    
}
