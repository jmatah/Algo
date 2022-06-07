#
# LeetCode 283. Move Zeroes Python
#
class Solution:
    def moveZeroes(self, nums: list[int]) -> None:
        """
        Do not return anything, modify nums in-place instead.
        """
        zeroes = nums.count(0)
        if zeroes > 0:
            for i in range(zeroes):
                del nums[nums.index(0)]
                nums.append(0)
        print(nums)

nums = [0,1,0,3,12]
#nums = [0, 0,0,0,0,120,0,34,45,56,67]
print(nums)

sol = Solution()
sol.moveZeroes(nums)
print(nums)